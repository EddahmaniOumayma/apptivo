<?php

namespace App\Http\Controllers;

use App\Models\Type_conge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Type_congeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types_conge=Type_conge::paginate(10); 
        return view('types_conge.index',compact('types_conge'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       return view('types_conge.ajouter');
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
            'libelle_type' => 'required|string|max:255',
            
            
            'Nbr_jrs' =>'nullable|integer|min:0',
          
           
           
    
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
    
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $type = new Type_conge();
        $type->libelle_type = $request->input('libelle_type');
      
        $type->Nbr_jrs = $request->input('Nbr_jrs');

        $type->save();

        return redirect()->route('types_conge.index');

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
        $rules = [
            'libelle_type' => 'required|string|max:255',
            
            
            'Nbr_jrs' =>'nullable|integer|min:0',
          
           
           
    
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
    
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
       
      

    
    

        $type = Type_conge::find($id);
        
        $type->libelle_type = $request->input('libelle_type');
      
        $type->Nbr_jrs = $request->input('Nbr_jrs');

        $type->save();

        return redirect()->route('types_conge.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type_conge::find($id);
        if (!$type) {
            return back()->withErrors(['message' => 'Enregistrement introuvable.']);
        }
        $type->delete();
        return redirect()->route('types_conge.index')->with('succès', 'Lenregistrement a été supprimé.');
    }
}
