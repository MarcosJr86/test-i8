<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rol extends Model
{
    use HasFactory;
    protected $table='roles';
    protected $primaryKey = 'id_rol';

    protected $fillable = [
          'nombre_rol', 
          'descripcion_rol'
    ];


    /**
    * Relación muchos a muchos
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function users()
    {
        return $this->belongsToMany(User::class,'roles_users','id_rol','user_id');
    }
}
