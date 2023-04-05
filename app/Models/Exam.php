<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// exam=concour

class Exam extends Model
{
    use HasFactory;

    protected $table='exams';
    protected $guarded = [];
       

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
