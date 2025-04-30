<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horarios';
    protected $fillable = [
        'dentista_id',
        'dia_semana_id',
        'hora_inicio',
        'hora_fin',
        'habilitado'    
    ];

    // Relación: Un Horario pertenece a un Dentista
    public function dentista()
    {
        return $this->belongsTo(Dentista::class, 'dentista_id');
    }

    // Relación: Un Horario pertenece a un DiaSemana
    
    public function diaSemana()
    {
        return $this->belongsTo(DiaSemana::class, 'dia_semana_id');
    }

}
