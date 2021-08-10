<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repositorio extends Model
{
    use HasFactory;

    protected $table='repositorios';
    protected $primaryKey = 'id_repositorio ';

    protected $fillable = [
          'nombre_repositorio', 
          'descripcion_repositorio',
          'user_id ',
    ];


    /**
    * Relación uno a muchos
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','user_id');    
    }
}
