<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadre extends Model
{
    use HasFactory;

    protected $table='cadres';
   
    protected $fillable = [

        'libelle_c',
        'corp_id',
   
     ];
     public function corp()
    {
        return $this->belongsTo(Corp::class);
    }


     public function grades()
     {
         return $this->hasMany(Grade::class);
     }
}



        //users:  {  'nom','prenom','date_naissance','lieu_naissance','sex',
       //'image','tel','cin','date_ambauche','situation_familial','Nbr_enfants','status',}
       //corps :{libelle}
       //cadres :{libelle_c,corp_id}
       //grades :{libelle_g,salaire_de_base,besoin_concours ,cadre_id}
       //indices :{libelle_i,grade_id}
       //indice_users :{date,indice_id,user_id}

      