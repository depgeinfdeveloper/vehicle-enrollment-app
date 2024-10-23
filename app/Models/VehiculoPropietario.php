<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculoPropietario extends Model
{
    use HasFactory;
    protected $table = 'vehiculos_propietarios';
    protected $fillable = [
        'vehiculo_id',
        'apellidos_nombres',
        'direccion',
        'tipo_propietario',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(VehiculoFormal::class, 'vehiculo_id');
    }


}
