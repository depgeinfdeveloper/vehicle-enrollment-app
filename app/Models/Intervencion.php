<?php

namespace App\Models;

use App\Casts\TimeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervencion extends Model
{
    use HasFactory;
    protected $table = 'intervenciones';
    protected $fillable = [
        'fecha_intervencion',
        'hora_intervencion',
        'latitud',
        'longitud',
        'tipo_distrito_id',
        'tipo_estado_vehiculo_id',
        'vehiculo_id',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
        'fecha_intervencion' => 'date',
        'hora_intervencion' => TimeCast::class,
    ];

    public function tipoDistrito()
    {
        return $this->belongsTo(TipoDistrito::class, 'tipo_distrito_id');
    }

    public function tipoEstadoVehiculo()
    {
        return $this->belongsTo(TipoEstadoVehiculo::class, 'tipo_estado_vehiculo_id');
    }

    public function vehiculo()
    {
        return $this->belongsTo(VehiculoFormal::class, 'vehiculo_id');
    }
}
