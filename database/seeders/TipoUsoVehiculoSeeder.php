<?php

namespace Database\Seeders;

use App\Models\TipoUsoVehiculo;
use Illuminate\Database\Seeder;

class TipoUsoVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiposUso = [
            "Uso Personal",
            "Reparto de comida",
            "Mensajería y paquetería",
            "Transporte público (moto-taxi)",
            "Competencias deportivas",
            "Turismo y viajes largos",
            "Motocross",
            "Entrega de encomiendas",
            "Seguridad y patrullaje",
            "Uso militar o policial",
            "Servicios de emergencia",
            "Courier y logística",
            "Aventura y off-road",
            "Alquiler comercial",
            "Mototurismo",
            "Trabajos rurales o agrícolas"
        ];

        foreach ($tiposUso as $tipoUso) {
            TipoUsoVehiculo::create([
                'descripcion' => $tipoUso,
                'estado' => 1
            ]);
        }

    }
}
