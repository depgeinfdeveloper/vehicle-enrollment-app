<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoNacionalidad extends Model
{
    use HasFactory;
    protected $table = 'tipo_nacionalidad';
    protected $fillable = [
        'pais_nac',
        'gentilicio_nac',
        'iso_nac',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];
}
