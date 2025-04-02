<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DentistaTratamiento extends Model
{
    protected $fillable = [
        'dentista_id',
        'tratamiento_id'
    ];
}
