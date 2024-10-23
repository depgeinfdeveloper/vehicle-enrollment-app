<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDepartamento extends Model
{
    use HasFactory;
    protected $table = 'tipo_departamento';
    protected $fillable = [
        'nombre',
        'estado',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];
    public $timestamps = false;
}
