<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialTratamientosPaciente extends Model
{
    use HasFactory;

    protected $table = 'historial_tratamientos_paciente';

    protected $fillable = [
        'dentista_id',
        'paciente_id',
        'tratamiento_id',
        'observaciones',
        'fecha_inicio',
        'fecha_fin',
        'estado_id',
    ];

    // Relación: Un HistorialTratamientoPaciente pertenece a un Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    // Relación: Un HistorialTratamientoPaciente pertenece a un Dentista
    public function dentista()
    {
        return $this->belongsTo(Dentista::class, 'dentista_id');
    }

    // Relación: Un HistorialTratamientoPaciente pertenece a un Estado
    
    public function estado()
    {
        return $this->belongsTo(EstadoCita::class, 'estado_id');
    }
}
