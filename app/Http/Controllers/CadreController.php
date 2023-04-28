<?php

namespace App\Http\Controllers;

use App\Models\Cadre;
use App\Http\Controllers\Controller;
use App\Models\Corp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class cadreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadres=DB::table('cadres')
        ->join('corps', 'cadres.corp_id', '=', 'corps.id')
        ->select('corps.libelle', 'cadres.*')
        ->paginate(10);

        $corps=Corp::all();
        return view('cadre.index',compact('cadres','corps'));
        
       
  
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $corps=Corp::all();
        return view('cadre.ajouter',compact('corps'));
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
           
          
            'libelle_c' => 'required',
            'corp_id' => 'required',


        ]);

       

        Cadre::create($request->all());

      
        return redirect()->route('cadres.index');
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
        $cadre=Cadre::find($id);
        $corp=Corp::all();
        return view("cadre.modifier",compact('cadre','corp'));
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
      

       
        $cadre=Cadre::find($id);
        $info = $cadre->update([
       
          'libelle_c' =>$request->libelle_c,
          'corp_id' =>$request->corp_id,
 
         
          ]);
       ;

      
        return redirect()->route('cadres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadre = cadre::find($id);
       
      
        if (!$cadre) {
            return back()->withErrors(['message' => 'Enregistrement introuvable.']);
        }
        $cadre->delete();
        return redirect()->route('cadres.index')->with('succès', 'Lenregistrement a été supprimé.');
    }
}
