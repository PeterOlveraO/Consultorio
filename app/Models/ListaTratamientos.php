<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaTratamientos extends Model
{
    use HasFactory;

    protected $table = 'lista_tratamientos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'activo'
    ];

    public function dentistas()
    {
        return $this->belongsToMany(Dentista::class, 'dentistas_tratamientos', 'tratamiento_id', 'dentista_id');
    }
}
