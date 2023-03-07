<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FonctionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
      
            //users:  {  'nom','prenom','date_naissance','lieu_naissance','sex',
            //'image','tel','cin','date_ambauche','situation_familial','Nbr_enfants','status',}
            //corps :{libelle}
            //cadres :{libelle_c,corp_id}
            //grades :{libelle_g,salaire_de_base,besoin_concours ,cadre_id}
            //indices :{libelle_i,grade_id}
            //indice_users :{date,indice_id,user_id}



        $data = DB::table('users')
            ->join('indice_users', 'users.id', '=', 'indice_users.user_id')
            ->join('indices', 'indice_users.indice_id', '=', 'indices.id')
            ->join('grades', 'indices.grade_id', '=', 'grades.id')
            ->join('cadres', 'grades.cadre_id', '=', 'cadres.id')
            ->join('corps', 'cadres.corp_id', '=', 'corps.id')
            ->get();
        
            return view("admin.pages.index",compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
