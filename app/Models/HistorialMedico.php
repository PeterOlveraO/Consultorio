<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialMedico extends Model
{
    //
    protected $fillable = [
        'paciente_id',
        'dentista_id',
        'tratamiento_id',
        'observaciones',
        'fecha',
    ];
}
