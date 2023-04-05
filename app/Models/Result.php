<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model //result
{
    use HasFactory;

    protected $table='results';
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
