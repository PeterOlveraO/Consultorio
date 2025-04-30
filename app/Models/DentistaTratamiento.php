<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentistaTratamiento extends Model
{
    use HasFactory;

    protected $table = 'dentistas_tratamientos';
    protected $fillable = [
        'dentista_id',
        'tratamiento_id'
    ];

    // Relación: Una entrada en DentistaTratamiento pertenece a un Dentista
    public function dentista()
    {
        return $this->belongsTo(Dentista::class, 'dentista_id');
    }

    // Relación: Una entrada en DentistaTratamiento pertenece a un ListaTratamiento
    public function tratamiento()
    {
        return $this->belongsTo(ListaTratamientos::class, 'tratamiento_id');
    }

}
