<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model //answer
{
    use HasFactory;

    protected $table='answers';
    protected $guarded = [];

    public function Question()
    {
        return $this->belongsTo(Question::class);
    }
}
