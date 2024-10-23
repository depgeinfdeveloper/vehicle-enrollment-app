<?php

namespace Database\Seeders;

use App\Models\TipoEstadoVehiculo;
use Illuminate\Database\Seeder;

class TipoEstadoVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiposEstadoVehiculo = [
            "Registrado en SUNARP",            // Documento Nacional de Identidad
            "No Registrado en SUNARP",      // Pasaporte
        ];

        foreach ($tiposEstadoVehiculo as $tipoEstadoVehiculo) {
            TipoEstadoVehiculo::create([
                'descripcion' => $tipoEstadoVehiculo,
                'estado' => 1
            ]);
        }
    }
}
