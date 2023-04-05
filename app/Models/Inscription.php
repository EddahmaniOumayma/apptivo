<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
   

    protected $table='inscriptions';
    protected $guarded = [];
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function exam() //exam
    {
        return $this->belongsTo(Exam::class);
    }
}
