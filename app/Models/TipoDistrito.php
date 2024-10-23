<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDistrito extends Model
{
    use HasFactory;
    protected $table = 'tipo_distrito';

    protected $fillable = [
        'nombre',
        'ubigeo',
        'completo',
        'estado',
        'tipo_prov_id',
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    public function tipoProvincia()
    {
        return $this->belongsTo(TipoProvincia::class, 'tipo_prov_id');
    }
}
