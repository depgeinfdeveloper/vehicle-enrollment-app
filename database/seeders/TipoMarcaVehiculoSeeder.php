<?php

namespace Database\Seeders;

use App\Models\TipoMarcaVehiculo;
use Illuminate\Database\Seeder;

class TipoMarcaVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marcas = [
            "Honda",
            "Yamaha",
            "Suzuki",
            "Kawasaki",
            "Ducati",
            "Harley-Davidson",
            "BMW",
            "KTM",
            "Triumph",
            "Royal Enfield",
            "Aprilia",
            "MV Agusta",
            "Bajaj",
            "TVS",
            "Hero",
            "Vespa",
            "Indian",
            "Benelli",
            "Husqvarna",
            "Moto Guzzi"
        ];

        foreach ($marcas as $marca) {
            TipoMarcaVehiculo::create([
                'descripcion' => $marca,
                'estado' => 1
            ]);
        }
    }
}
