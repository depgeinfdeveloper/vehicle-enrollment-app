<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTripulante extends Model
{
    use HasFactory;
    protected $table = 'tipo_tripulante';
    protected $fillable = [
        'descripcion',
        'estado',
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];
}
