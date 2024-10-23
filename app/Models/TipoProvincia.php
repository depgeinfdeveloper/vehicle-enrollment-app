<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProvincia extends Model
{
    use HasFactory;
    protected $table = 'tipo_provincia';

    protected $fillable = [
        'nombre',
        'ubigeo',
        'completo',
        'estado',
        'tipo_dep_id',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    public function tipoDepartamento()
    {
        return $this->belongsTo(TipoDepartamento::class, 'tipo_dep_id');
    }
}
