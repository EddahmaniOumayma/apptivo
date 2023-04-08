<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table='grades';
   
    protected $fillable = [

        'libelle_g',
        'salaire_de_base',
        'besoin_concours',
        'cadre_id',
   
     ];

     public function cadre()
     {
         return $this->belongsTo(Cadre::class);
     }

     public function indices()
     {
         return $this->hasMany(Indice::class);
     }

     public function concour()
     {
         return $this->hasOne(Concour::class);
     }
      
}



