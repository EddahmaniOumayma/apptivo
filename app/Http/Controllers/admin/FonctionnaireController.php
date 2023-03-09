<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cadre;
use App\Models\Corp;
use App\Models\Grade;
use App\Models\User;
use App\Models\Indice;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class FonctionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
      ; 
      
            //users:  {  'nom','prenom','date_naissance','lieu_naissance','sex',
            //'image','tel','cin','date_ambauche','situation_familial','Nbr_enfants','status',}
            //corps :{libelle}
            //cadres :{libelle_c,corp_id}
            //grades :{libelle_g,salaire_de_base,besoin_concours ,cadre_id}
            //indices :{libelle_i,grade_id}
            //indice_users :{date,indice_id,user_id}



        $data = DB::table('users')
            ->join('indice_user', 'users.id', '=', 'indice_user.user_id')
            ->join('indices', 'indice_user.indice_id', '=', 'indices.id')
            ->join('grades', 'indices.grade_id', '=', 'grades.id')
            ->join('cadres', 'grades.cadre_id', '=', 'cadres.id')
            ->join('corps', 'cadres.corp_id', '=', 'corps.id')
            ->get();
             
            return view("admin.index",compact('data'));
        
         
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $corps = Corp::all();
        $cadres=Cadre::all();
        $grades=Grade::all();
        $indices=Indice::all();
        $roles=Role::all();

        return View('admin.pages.ajouter',compact('corps','cadres','grades','indices','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $rules = [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required|string|max:255',
            'sexe' => 'required|in:0,1',
            'image' => 'nullable|max:2048',
            'tel' => 'required|string',
            'cin' => 'required|string|max:255|unique:users,cin',
            'date_ambauche' => 'required|date',
            'situation_familial' => 'required|string|max:255',
            'Nbr_enfants' => 'nullable|integer|min:0',
            'password' => 'required|string|min:8|max:255',
            'corp_id' => 'required',
            'cadre_id' => 'required',
            'grade_id' => 'required',
            'indice_id' => 'required',
            'role' => 'required',
    
        ];

    
    $validator = Validator::make($request->all(),$rules);
    if ($validator->fails()) {
    
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }


            // 1. Get the image data from the request
            $imageData = $request->file('image');

            if($imageData)
            {
                $filename = uniqid() . '.' . $imageData->extension();
                $path = $imageData->storeAs('images/users', $filename, 'public');
            }




    
    // Create user
    $user = new User;
    $user->nom = $request->input('nom');
    $user->prenom = $request->input('prenom');
    $user->email = $request->input('email');
    $user->date_naissance = $request->input('date_naissance');
    $user->lieu_naissance = $request->input('lieu_naissance');
    $user->sexe = $request->input('sexe');
    $user->tel = $request->input('tel');
    $user->image =$path;
    $user->cin = $request->input('cin');
    $user->date_ambauche = $request->input('date_ambauche');
    $user->situation_familial = $request->input('situation_familial');
    $user->Nbr_enfants = $request->input('Nbr_enfants');
    $user->password = Hash::make($request->input('password'));
    $user->save();
    
    // Create indice_user pivot record
    $indice = Indice::where('id', $request->input('indice_id'))->firstOrFail();

    $now = now();
    $user->indice()->attach($indice->id,['created_at' => $now]);
    
    
    // Redirect to user profile page Here
    return redirect()->route('fonctionnaires.index');
          

    
       

       


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = DB::table('users')
        ->join('indice_users', 'users.id', '=', 'indice_users.user_id')
        ->join('indices', 'indice_users.indice_id', '=', 'indices.id')
        ->join('grades', 'indices.grade_id', '=', 'grades.id')
        ->join('cadres', 'grades.cadre_id', '=', 'cadres.id')
        ->join('corps', 'cadres.corp_id', '=', 'corps.id')
        ->where('users.id', $id)
        ->first();

   dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
