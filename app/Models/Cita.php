<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{

    use HasFactory;

    protected $table = 'citas';
    protected $fillable = [
        'paciente_id',
        'dentista_id',
        'fecha',
        'dentistatratamiento_id',
        'estado_id',
        'comentarios'
    ];

    // Relación: Una Cita pertenece a un Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    // Relación: Una Cita pertenece a un Dentista
    public function dentista()
    {
        return $this->belongsTo(Dentista::class, 'dentista_id');
    }

    // Relación: Una Cita pertenece a un EstadoCita
    public function estado()
    {
        return $this->belongsTo(EstadoCita::class, 'estado_id');
    }

    // Relación: Una Cita pertenece a una entrada específica en DentistaTratamiento
    public function dentistaTratamiento()
    {
        return $this->belongsTo(DentistaTratamiento::class, 'dentistratamiento_id');
    }

    
}
