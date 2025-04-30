<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentista extends Model
{
    use HasFactory;

    //Especifica la tabla de la base de datos 
    protected $table = 'dentistas';

    protected $fillable = [
        'nombre',
        'apellido',
        'especialidad',
        'telefono',
        'email',
        'direccion',
        'contrasena',
        'es_administrador',
        'activo'
    ];

    // Relación: Un Dentista tiene muchos HistorialMedico
    public function historialMedico()
    {
        return $this->hasMany(HistorialMedico::class, 'dentista_id');
    }

    // Relación: Un Dentista tiene muchas Citas
    public function citas()
    {
        return $this->hasMany(Cita::class, 'dentista_id');
    }

    // Relación: Un Dentista tiene muchos HistorialTratamientoPaciente
    public function historialTratamientosPaciente()
    {
        return $this->hasMany(HistorialTratamientosPaciente::class, 'dentista_id');
    }

    // Relación: Un Dentista tiene muchos Horarios
    public function horarios()
    {
        return $this->hasMany(Horario::class, 'dentista_id');
    }

    // Relación Muchos a Muchos: Un Dentista puede realizar muchos ListaTratamiento
    // a través de la tabla pivote dentistas_tratamientos
    public function tratamientos()
    {
        return $this->belongsToMany(ListaTratamientos::class, 'dentistas_tratamientos', 'dentista_id', 'tratamiento_id');
    }
}
