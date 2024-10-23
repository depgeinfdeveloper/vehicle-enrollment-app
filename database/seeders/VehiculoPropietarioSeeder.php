<?php

namespace Database\Seeders;

use App\Models\VehiculoFormal;
use App\Models\VehiculoPropietario;
use Illuminate\Database\Seeder;

class VehiculoPropietarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehiculos = VehiculoFormal::all();
        foreach ($vehiculos as $vehiculo) {
            // Genera entre 1 y 2 propietarios para cada vehículo
            $numberOfPropietarios = rand(1, 2);

            VehiculoPropietario::factory()->count($numberOfPropietarios)->forVehiculo($vehiculo->id)->create();
        }
    }
}
