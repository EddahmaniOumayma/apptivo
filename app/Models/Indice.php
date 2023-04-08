<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indice extends Model
{
    use HasFactory;
    protected $table='indices';
    protected $guarded = [];
    
     public function grade()
     {
         return $this->belongsTo(Grade::class);
     }

     public function users()
     {
         return $this->belongsToMany(User::class);
     }
 }





     