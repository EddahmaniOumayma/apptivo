<?php

namespace App\Http\Controllers;

use App\Models\Cadre;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data=DB::table('grades')
        ->join('cadres', 'grades.cadre_id', '=', 'cadres.id')
        ->select('cadres.libelle_c', 'grades.*')
        ->get();
        return view('grade.index',compact('data'));
       
  
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cadre=Cadre::all();
        return view('grade.ajouter',compact('cadre'));
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
           
          
            'libelle_g' => 'required',
            'salaire_de_base' => 'required',
            'besoin_concours' => 'required|boolean',
            'cadre_id' => 'required',



        ]);

       

        Grade::create($request->all());

      
        return redirect()->route('grades.index');
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
        $grade=Grade::find($id);

        $cadre=Cadre::all();

        return view("grade.modifier",compact('cadre','grade'));
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
      

       
        $grade=Grade::find($id);

        $grade->update([
       
          'libelle_c' =>$request->libelle_c,
          'salaire_de_base' =>$request->salaire_de_base,
          'besoin_concours' =>$request->besoin_concours,
          'cadre_id' =>$request->cadre_id,
          ]);
       ;

      
        return redirect()->route('grades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grade = Grade::find($id);
        $grade->delete();
        return redirect()->route('grades.index');
    }
}
