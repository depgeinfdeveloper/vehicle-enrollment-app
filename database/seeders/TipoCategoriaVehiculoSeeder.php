<?php

namespace Database\Seeders;

use App\Models\TipoCategoriaVehiculo;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TipoCategoriaVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categorias = [
            "L1",
            "L2",
            "L3",
            "L4",
            "L5",
            "L6",
            "L7",
            "M1",
            "M1 - SA",
            "M1 - SC",
            "M1 - SD",
            "M1 - SE",
            "M1 - SF",
            "M2 - C1",
            "M2 - C2",
            "M2 - C3",
            "M2 - SA",
            "M2 - SC",
            "M2 - SD",
            "M2 - SE",
            "M2 - SF",
            "M2 - SG",
        ];

        // Iterar sobre el array y crear una fila por cada categoría
        foreach ($categorias as $categoria) {
            TipoCategoriaVehiculo::create([
                'codigo' => $categoria,
                'descripcion' => $faker->text(),
                'estado' => 1
            ]);
        }
    }
}
