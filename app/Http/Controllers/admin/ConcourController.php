<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Concour;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConcourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concours = Concour::with('grade')->paginate(10);
        
       
         return view('admin.concours.index',compact('concours'));
         
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $grades=Grade::all();
       return view('admin.concours.ajouter',compact('grades'));
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
            'libelle' => 'required|string|max:255',
            
            'date_examination' => 'required|date',
          
            'grade_id' => 'required',
           
    
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
    
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $concour = new Concour;
        $concour->libelle = $request->input('libelle');
      
        $concour->date_examination = $request->input('date_examination');
        $concour->grade_id = $request->input('grade_id');

        $concour->save();

        return redirect()->route('concours.index')->with('success', 'concours  ajoutée !');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concour=Concour::find($id);
        $grades=Grade::all();
        return view('admin.concours.modifier',compact('grades','concour'));
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
            'libelle' => 'required|string|max:255',
            
            'date_examination' => 'required|date',
          
            'grade_id' => 'required',
           
    
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
    
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $concour = Concour::find($id);
        $concour->libelle = $request->input('libelle');
      
        $concour->date_examination = $request->input('date_examination');
        $concour->grade_id = $request->input('grade_id');

        $concour->save();

        return redirect()->route('concours.index')->with('info', 'concours  modifier !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $concour = Concour::find($id);
        if (!$concour) {
            return back()->withErrors(['message' => 'Enregistrement introuvable.']);
        }
        $concour->delete();
        return redirect()->route('concours.index');
    }






    


       public function ListNotes()
    {
        $users = User::with(['concours' => function ($query) {
            $query->withPivot('note');
        }])       
         ->whereHas('concours', function ($query) {
            $query->whereNotNull('note');
        })
        ->get() 
        ->groupBy('id');
       
        //  return response()->json($users);
      
         return view('admin.notes.index', compact('users'));
        
    }


       public function UpdateNote(Request $request)
       {
      

        $validatedData = $request->validate([
           'note' => 'required',
        ]);
       
    
        // Recherche de l'utilisateur en fonction du cin
        $user = User::where('cin', $request->cin)->first();
    

        $note=DB::table('concour_user')
        ->select('note')
        ->where('user_id','=',$user->id);
       

        $note->update(['note' => $request->note]); 
     
        
    
            // Redirection vers la page de liste des congés avec un message de confirmation
            return redirect()->back();

      

}

}