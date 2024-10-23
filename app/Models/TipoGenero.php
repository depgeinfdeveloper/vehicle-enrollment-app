<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoGenero extends Model
{
    use HasFactory;
    protected $table = 'tipo_genero';
    protected $fillable = [
        'descripcion',
        'estado',
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];
}
