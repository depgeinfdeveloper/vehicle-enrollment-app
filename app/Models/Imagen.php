<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagenes';

    protected $fillable = [
        'intervencion_id',
        'tipo_entidad_archivo_id',
        'entidad_id',
        'path_imagen',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    public function intervencion()
    {
        return $this->belongsTo(Intervencion::class, 'intervencion_id');
    }

    public function tipoEntidadArchivo()
    {
        return $this->belongsTo(TipoEntidadArchivo::class, 'tipo_entidad_archivo_id');
    }
}
