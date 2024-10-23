<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculoInformal extends Model
{
    use HasFactory;
    protected $table = 'vehiculos_informales';
    protected $fillable = [
        'tipo_categoria',
        'tipo_color',
        'combustible',
        'tipo_marca',
        'modelo',
        'motor',
        'num_asientos',
        'num_ejes',
        'num_pasajeros',
        'num_ruedas',
        'num_series',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];
}
