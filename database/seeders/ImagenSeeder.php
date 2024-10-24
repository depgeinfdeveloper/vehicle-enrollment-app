<?php

namespace Database\Seeders;

use App\Models\Imagen;
use App\Models\Intervencion;
use App\Models\IntervencionTripulante;
use App\Models\Licencia;
use App\Models\TipoEntidadArchivo;
use Illuminate\Database\Seeder;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $intervenciones = Intervencion::all();

        foreach ($intervenciones as $intervencion) {
            $tiposEntidades = TipoEntidadArchivo::all();

            foreach ($tiposEntidades as $tipoEntidad) {
                for ($i = 0; $i < 2; $i++) {
                    Imagen::factory()->create([
                        'intervencion_id' => $intervencion->id,
                        'tipo_entidad_archivo_id' => $tipoEntidad->id,
                        'entidad_id' => $this->getEntidadId($tipoEntidad, $intervencion),
                    ]);
                }
            }
        }
    }

    private function getEntidadId($tipoEntidad, $intervencion)
    {
        switch ($tipoEntidad->id) {
            case 1:
                return $intervencion->id;
            case 2:
                return IntervencionTripulante::inRandomOrder()->first()->id;
            case 3:
                return Licencia::inRandomOrder()->first()->id;
            default:
                return null;
        }
    }
}
