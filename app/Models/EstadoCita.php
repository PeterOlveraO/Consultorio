<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCita extends Model
{
    use HasFactory;

    protected $table = 'estados_cita';

    protected $fillable = [
        'nombre_estado',
        'descripcion'
    ];

    // Relación: Un EstadoCita tiene muchas Citas
    public function citas()
    {
        return $this->hasMany(Cita::class, 'estado_id');
    }

    // Relación: Un EstadoCita tiene muchos HistorialTratamientoPaciente
    public function historialTratamientosPaciente()
    {
        return $this->hasMany(HistorialTratamientosPaciente::class, 'estado_id');
    }
}
