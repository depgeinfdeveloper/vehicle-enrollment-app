<?php

namespace Database\Seeders;

use App\Models\TipoTripulante;
use Illuminate\Database\Seeder;

class TipoTripulanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tripulantes = [
            "Conductor",
            "Acompañante"
        ];

        foreach ($tripulantes as $tripulante) {
            TipoTripulante::create([
                'descripcion' => $tripulante,
                'estado' => 1
            ]);
        }
    }
}
