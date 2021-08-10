<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perfil extends Model
{
    use HasFactory;
	protected $table='perfiles';
    protected $primaryKey = 'id_perfil';

    protected $fillable = [
          'resumen_perfil', 
          'sitio_web',
          'link_github',
          'user_id'
    ];



    /**
    * Relación uno a uno
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    * 
    */
    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');    }

}
