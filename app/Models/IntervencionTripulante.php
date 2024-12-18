<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervencionTripulante extends Model
{
    use HasFactory;
    protected $table = 'intervenciones_tripulantes';
    protected $fillable = [
        'tipo_tripulante_id',
        'intervencion_id',
        'tipo_nacionalidad_id',
        'tipo_documento_id',
        'tipo_genero_id',
        'tipo_distrito_id',
        'num_doc',
        'apellidos',
        'nombres',
        'fecha_nacimiento',
        'fecha_emision',
        'fecha_caducidad',
        'direccion',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
        'fecha_nacimiento' => 'date',
        'fecha_emision' => 'date',
        'fecha_caducidad' => 'date',
    ];

    // Definir las relaciones con otros modelos
    public function tipoTripulante()
    {
        return $this->belongsTo(TipoTripulante::class, 'tipo_tripulante_id');
    }

    public function intervencion()
    {
        return $this->belongsTo(Intervencion::class, 'intervencion_id');
    }

    public function tipoNacionalidad()
    {
        return $this->belongsTo(TipoNacionalidad::class, 'tipo_nacionalidad_id');
    }

    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class, 'tipo_documento_id');
    }

    public function tipoGenero()
    {
        return $this->belongsTo(TipoGenero::class, 'tipo_genero_id');
    }

    public function tipoDistrito()
    {
        return $this->belongsTo(TipoDistrito::class, 'tipo_distrito_id');
    }

}
