<?php

namespace Database\Seeders;

use App\Models\TipoEntidadArchivo;
use Illuminate\Database\Seeder;

class TipoEntidadArchivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entidades = [
            "Vehículo Menor",
            "Persona",
            "Licencia de Conducir",
        ];
        foreach ($entidades as $entidad) {
            TipoEntidadArchivo::create([
                'descripcion' => $entidad,
                'estado' => 1
            ]);
        }
    }
}
