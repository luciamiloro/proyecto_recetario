<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despensa extends Model
{
    use HasFactory;
    protected $primarykey = "despensaId"; //columna en la tabla despensa
    protected $table = "despensaMigradas";
}
