<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'paciente_id',
        'dentista_id',
        'fecha',
        'dentistatratamiento_id',
        'estado_id',
        'comentarios'
    ];

    
}
