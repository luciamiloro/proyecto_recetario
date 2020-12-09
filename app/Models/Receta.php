<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    public function comentarios()
    {
        {
            return $this->hasMany('App\Comment', 'comentarios');
        }
    }

    public $nombre;
    public $descripcion;
}
