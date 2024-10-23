<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCategoriaVehiculo extends Model
{
    use HasFactory;
    protected $table = 'tipo_categoria_vehiculo';
    protected $fillable = [
        'codigo',
        'descripcion',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];
}
