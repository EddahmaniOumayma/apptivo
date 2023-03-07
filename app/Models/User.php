<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    /**
     *  $table->id();

     */
    protected $fillable = [

       'nom',
       'prenom',
       'email',
       'date_naissance',
       'lieu_naissance',
       'sexe',
       'image',
       'tel',
       'cin',
       'date_ambauche',
       'situation_familial',
       'Nbr_enfants',
       'status',
    ];
    //users:  {  'nom','prenom','date_naissance','lieu_naissance','sex',
    //'image','tel','cin','date_ambauche','situation_familial','Nbr_enfants','status',}

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function indice()
    {
        return $this->belongsToMany(Indice::class);
    }
}