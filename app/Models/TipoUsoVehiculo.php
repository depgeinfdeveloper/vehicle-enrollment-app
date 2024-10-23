<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsoVehiculo extends Model
{
    use HasFactory;
    protected $table = 'tipo_uso_vehiculo';
    protected $fillable = [
        'descripcion',
        'estado',
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];
}
