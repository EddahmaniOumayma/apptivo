<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indice_user extends Model
{
    use HasFactory;
    protected $table='indice_user';
   
    protected $fillable = [

        'indice_id',
        'user_id',
 
   
     ];
     





     
}




