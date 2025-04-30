<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaSemana extends Model
{
    use HasFactory;

    protected $table = 'dias_semana';
    protected $fillable = [
        'nombre_dia',
    ];

     // Relación: Un DiaSemana tiene muchos Horarios
    // Asegúrate de que el nombre de la clave foránea sea correcto ('dia_sempre_id')
    public function horarios()
    {
        return $this->hasMany(Horario::class, 'dia_semana_id');
    }
}
