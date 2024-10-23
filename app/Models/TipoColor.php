<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoColor extends Model
{
    use HasFactory;
    protected $table = 'tipo_color';
    protected $fillable = [
        'descripcion',
        'estado',
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];
}
