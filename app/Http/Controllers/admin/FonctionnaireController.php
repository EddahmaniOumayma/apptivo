<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
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
    
      
        //     $data = DB::table('users')
        //     ->join('indice_user', 'users.id', '=', 'indice_user.user_id')

        //     ->join('indices', 'indices.id', '=', 'indice_user.indice_id')
        //     ->join('grades', 'indices.grade_id', '=', 'grades.id')
        //     ->join('cadres', 'grades.cadre_id', '=', 'cadres.id')
        //    ->join('corps', 'cadres.corp_id', '=', 'corps.id')->get();
            // ->whereHas('roles', function ($query) {
            //     $query->where('name', 'Fonctionnaire');
            // })
            // ->paginate(10);

            // $users = User::whereHas('indices',function($query){

            //     $query->whereHas('grade',function($query){

            //         $query->whereHas('cadre',function($query){

            //             $query->whereHas('corp',function($query){


            //             });
            //         });

            //     });

            // });

            $data = User::with(['indices' => function($query){
                $query->with(['grade' => function($query){
                    $query->with(['cadre' => function($query){
                        $query->with('corp');
                    }]);
                }]);
            }])->get();
            
            // return response()->json($users);

            
            
            
            
            
            
          
    
     

            

       

             
            // $data = $data->paginate(10);
    
    
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
    $user->indices()->attach($indice->id,['created_at' => $now]);
    
    
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

       

        $user = User::where('id','=',$id);
       $user = $user->with(['indices' => function($query){
            $query->with(['grade' => function($query){
                $query->with(['cadre' => function($query){
                    $query->with('corp');
                }]);
            }]);
        }])->get();
       

         return view('admin.pages.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $indices=Indice::all();
        $grades=Grade::all();
        $corps=Corp::all();
        $cadres=Cadre::all();
        $user=User::find($id);
        $roles=Role::all();

        return view("admin.pages.modifier",compact('indices','grades','user','cadres','corps','roles'));
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
        $rules = [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|unique:users,email,'.$id,
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

       
     dd($validator->messages());
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




    
    // update user
    $user = User::find($id);


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
    
    // update indice_user pivot record
    $indice = Indice::where('id', $request->input('indice_id'))->firstOrFail();

    $now = now();
    $user->indices()->attach($indice->id,['updated_at' => $now]);
    
    
    // Redirect to user profile page Here
    return redirect()->route('fonctionnaires.index');
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
