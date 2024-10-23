<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEstadoVehiculo extends Model
{
    use HasFactory;

    protected $table = 'tipo_estado_vehiculo';

    protected $fillable = [
        'descripcion',
        'estado',
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];
}
