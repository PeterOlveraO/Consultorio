<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialMedico extends Model
{
    use HasFactory;

    protected $table = 'historial_medico';
    protected $fillable = [
        'paciente_id',
        'dentista_id',
        'tratamiento_id',
        'observaciones',
        'fecha',
    ];

    // Relación: Un HistorialMedico pertenece a un Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    // Relación: Un HistorialMedico pertenece a un Dentista
    public function dentista()
    {
        return $this->belongsTo(Dentista::class, 'dentista_id');
    }
}
