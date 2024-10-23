<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculoFormal extends Model
{
    use HasFactory;
    protected $table = 'vehiculos_formales';
    protected $fillable = [
        'placa',
        'altura',
        'ancho',
        'anio_fabricacion',
        'anio_modelo',
        'carga_util',
        'carroceria',
        'tipo_categoria',
        'cilindrada',
        'tipo_color',
        'combustible',
        'rodante',
        'longitud',
        'tipo_marca',
        'modelo',
        'motor',
        'num_asientos',
        'num_ejes',
        'num_pasajeros',
        'num_ruedas',
        'num_series',
        'num_version',
        'oficina',
        'peso_bruto',
        'peso_neto',
        'potencia',
        'vin',
        'estado',
    ];

    // Definir si algún atributo es un tipo de dato específico (por ejemplo, booleano)
    protected $casts = [
        'estado' => 'boolean',
    ];
}
