<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'pacientes';
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'telefono',
        'activo'
    ];

    

    // Relación: Un Paciente tiene muchos HistorialMedico
    public function historialMedico()
    {
        return $this->hasMany(HistorialMedico::class, 'paciente_id');
    }

    // Relación: Un Paciente tiene muchas Citas
    public function citas()
    {
        return $this->hasMany(Cita::class, 'paciente_id');
    }

    // Relación: Un Paciente tiene muchos HistorialTratamientoPaciente
    public function historialTratamientosPaciente()
    {
        return $this->hasMany(HistorialTratamientosPaciente::class, 'paciente_id');
    }
}
