<?php

namespace Database\Seeders;

use App\Models\TipoColor;
use Illuminate\Database\Seeder;

class TipoColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colores = [
            "Rojo",
            "Verde",
            "Azul",
            "Amarillo",
            "Naranja",
            "Morado",
            "Negro",
            "Blanco",
            "Gris",
            "Rosa",
            "Cian",
            "Marrón"
        ];

        foreach ($colores as $color) {
            TipoColor::create([
                'descripcion' => $color,
                'estado' => 1
            ]);
        }
    }
}
