<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Indice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndiceController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $grades=Grade::all();
        $indices=DB::table('indices')
        ->join('grades', 'indices.grade_id', '=', 'grades.id')
        ->select('grades.libelle_g', 'indices.*')
        ->paginate(10);
        return view('indice.index',compact('indices','grades'));

   
  
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades=Grade::all();
        return view('indice.ajouter',compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           
          
            'grade_id' => 'required',
            'libelle_i' => 'required',
 
        ]);

       

        Indice::create($request->all());

      
        return redirect()->route('indices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indice=Indice::find($id);
        $grade=Grade::all();
        return view("indice.modifier",compact('indice','grade'));
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
      

        $indice=Indice::find($id);
        $indice->update([
       
          'libelle_i' =>$request->libelle_i,
          'grade_id' =>$request->grade_id,
         
         
 
         
          ]);
       ;

      
        return redirect()->route('indices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $indice = Indice::find($id);
        if (!$indice) {
            return back()->withErrors(['message' => 'Enregistrement introuvable.']);
        }
        return view('indices.delete', compact('indice'));
    }
    
    public function delete($id)
    {
        $indice = Indice::find($id);
        if (!$indice) {
            return back()->withErrors(['message' => 'Enregistrement introuvable.']);
        }
        $indice->delete();
        return redirect()->route('indices.index')->with('succès', 'Lenregistrement a été supprimé.');
    }
  
}
