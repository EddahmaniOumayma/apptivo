<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indice_user extends Model
{
    use HasFactory;
    protected $table='indice_users';
   
    protected $fillable = [

        'date',
        'indice_id',
        'user_id',
 
   
     ];






     
}



        //users:  {  'nom','prenom','date_naissance','lieu_naissance','sex',
       //'image','tel','cin','date_ambauche','situation_familial','Nbr_enfants','status',}
       //corps :{libelle}
       //cadres :{libelle_c,corp_id}
       //grades :{libelle_g,salaire_de_base ,besoin_concours,cadre_id}
       //indices :{libelle_i,grade_id}
       //indice_users :{date,indice_id,user_id}

