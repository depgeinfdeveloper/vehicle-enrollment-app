<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMarcaVehiculo extends Model
{
    use HasFactory;
    protected $table = 'tipo_marca_vehiculo';
    protected $fillable = [
        'descripcion',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];
}
