<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoCita extends Model
{
    //
    protected $fillable = [
        'nombre_estado',
        'descripcion'
    ];
}
