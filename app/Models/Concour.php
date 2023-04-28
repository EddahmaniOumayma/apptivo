<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concour extends Model
{


    use HasFactory;

    protected $table='concours';
    protected $guarded = [];


    public function users (){
        return $this->belongsToMany(User::class,'concour_user');

    }
    
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

  
}
