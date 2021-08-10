<?php

namespace App\Models;

use App\Models\Perfil;
use App\Models\Repositorio;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'user_id';

    protected $fillable = [
          'email', 
          'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
    * Relación uno a uno
    * 
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
    public function perfil()
    {
        return $this->hasOne(Perfil::class, 'user_id','user_id');
    }




    /**
    * Relación uno a muchos
    * 
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function repositorios()
    {
        return $this->hasMany(Repositorio::class,'user_id','user_id');
    }
}
