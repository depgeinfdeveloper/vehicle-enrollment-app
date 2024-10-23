<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervencionTipoUsoDetalle extends Model
{
    use HasFactory;
    protected $table = 'intervenciones_tipo_uso_detalle';

    protected $fillable = [
        'intervencion_id',
        'tipo_uso_vehiculo_id',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    public function intervencion()
    {
        return $this->belongsTo(Intervencion::class, 'intervencion_id');
    }

    public function tipoUsoVehiculo()
    {
        return $this->belongsTo(TipoUsoVehiculo::class, 'tipo_uso_vehiculo_id');
    }

}
