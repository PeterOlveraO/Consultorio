<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    protected $fillable = [
        'dentista_id',
        'dia_semana_id',
        'hora_inicio',
        'hora_fin',
        'habilitado'    
    ];
}
