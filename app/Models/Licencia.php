<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;
    protected $table = 'licencias';
    protected $fillable = [
        'intervencion_tripulante_id',
        'nro_licencia',
        'tipo_distrito_id',
        'fecha_expedicion',
        'fecha_expira',
        'situacion',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
        'fecha_expedicion' => 'date',
        'fecha_expira' => 'date',
    ];

    // Definir las relaciones con otros modelos
    public function intervencionTripulante()
    {
        return $this->belongsTo(IntervencionTripulante::class, 'intervencion_tripulante_id');
    }

    public function tipoDistrito()
    {
        return $this->belongsTo(TipoDistrito::class, 'tipo_distrito_id');
    }
}
