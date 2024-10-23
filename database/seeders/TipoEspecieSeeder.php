<?php

namespace Database\Seeders;

use App\Models\TipoEspecie;
use Illuminate\Database\Seeder;

class TipoEspecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pertenenciasMotoLineal = [
            "Casco de protección",
            "Guantes",
            "Chaqueta protectora",
            "Botas de motociclista",
            "Rodilleras",
            "Coderas",
            "Gafas de sol",
            "Llaves de la moto",
            "Celular",
            "Cargador portátil",
            "Herramientas básicas (llave inglesa, destornillador, etc.)",
            "Bidón de gasolina",
            "Candado de seguridad para la moto",
            "Kit de primeros auxilios",
            "Impermeable o poncho para la lluvia",
            "Mochila o maleta de motociclista",
            "Chaleco reflectante",
            "Protector de tanque de combustible",
            "Cubre asientos",
        ];
        foreach ($pertenenciasMotoLineal as $pertenencia) {
            TipoEspecie::create([
                'descripcion' => $pertenencia,
                'estado' => 1
            ]);
        }
    }
}
