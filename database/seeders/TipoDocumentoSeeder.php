<?php

namespace Database\Seeders;

use App\Models\TipoDocumento;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiposDocumentoIdentidad = [
            "DNI",            // Documento Nacional de Identidad
            "Pasaporte",      // Pasaporte
            "Cédula de Identidad",  // Utilizada en varios países de Latinoamérica
        ];

        foreach ($tiposDocumentoIdentidad as $documento) {
            TipoDocumento::create([
                'descripcion' => $documento,
                'estado' => 1
            ]);
        }
    }
}
