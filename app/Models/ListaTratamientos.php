<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListaTratamientos extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
