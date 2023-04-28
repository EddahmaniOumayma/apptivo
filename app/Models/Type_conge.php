<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_conge extends Model
{
    use HasFactory;

    protected $table='type_conges';
   
protected $guarded=[];


 public function conges()
 {
     return $this->hasMany(Conge::class);
 }
}
