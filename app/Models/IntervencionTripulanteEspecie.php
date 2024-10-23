<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervencionTripulanteEspecie extends Model
{
    use HasFactory;
    protected $table = 'intervenciones_tripulantes_especies';

    protected $fillable = [
        'intervencion_tripulante_id',
        'tipo_especie_id',
        'detalle_especie',
        'estado',
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];

    // Definir las relaciones con otros modelos
    public function intervencionTripulante()
    {
        return $this->belongsTo(IntervencionTripulante::class, 'intervencion_tripulante_id');
    }

    public function tipoEspecie()
    {
        return $this->belongsTo(TipoEspecie::class, 'tipo_especie_id');
    }
}
