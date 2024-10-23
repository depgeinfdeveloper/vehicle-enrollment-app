<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervencionInstructor extends Model
{
    use HasFactory;
    protected $table = 'intervenciones_instructores';
    protected $fillable = [
        'cip_pnp',
        'unidad_pnp',
        'intervencion_id',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];
    public function intervencion()
    {
        return $this->belongsTo(Intervencion::class, 'intervencion_id');
    }
}
