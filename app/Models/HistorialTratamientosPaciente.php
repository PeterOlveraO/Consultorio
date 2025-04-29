<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialTratamientosPaciente extends Model
{
    //
    protected $fillable = [
        'dentista_id',
        'paciente_id',
        'tratamiento_id',
        'observaciones',
        'fecha_inicio',
        'fecha_fin',
        'estado_id',
    ];
}
