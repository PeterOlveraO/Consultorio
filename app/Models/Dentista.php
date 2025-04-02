<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dentista extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'especialidad',
        'telefono',
        'email',
        'direccion',
        'contrasena',
        'es_administrador'
    ];
}
