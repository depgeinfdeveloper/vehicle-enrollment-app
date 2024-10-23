<?php

namespace Database\Seeders;

use App\Models\TipoGenero;
use Illuminate\Database\Seeder;

class TipoGeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos = [
            "Masculino",
            "Femenino",
            "Otro",
            "Prefiere no decirlo"
        ];

        foreach ($generos as $genero) {
            TipoGenero::create([
                'descripcion' => $genero,
                'estado' => 1
            ]);
        }
    }
}
