<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    use HasFactory;

    protected $table='conges';
    protected $guarded = [];
    
     public function type_conge()
     {
         return $this->belongsTo(Type_conge::class);
     }
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
