<?php

namespace Database\Factories;

use App\Models\Intervencion;
use App\Models\IntervencionTripulante;
use App\Models\Licencia;
use App\Models\TipoEntidadArchivo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $intervencion = Intervencion::inRandomOrder()->first();
        $intervencionTripulante = IntervencionTripulante::inRandomOrder()->first();
        $licencia = Licencia::inRandomOrder()->first();
        $tipoEntidad = TipoEntidadArchivo::inRandomOrder()->first();

        return [
            'intervencion_id' => $intervencion ? $intervencion->id : null,
            'tipo_entidad_archivo_id' => $tipoEntidad ? $tipoEntidad->id : null,
            'entidad_id' => $this->getEntidadId($tipoEntidad, $intervencion, $intervencionTripulante, $licencia),
            'path_imagen' => 'https://picsum.photos/640/480?random=' . $this->faker->randomNumber(),
            'estado' => true,
        ];
    }

    private function getEntidadId($tipoEntidad, $intervencion, $intervencionTripulante, $licencia)
    {
        switch ($tipoEntidad->id) {
            case 1:
                return $intervencion ? $intervencion->id : null;
            case 2:
                return $intervencionTripulante ? $intervencionTripulante->id : null;
            case 3:
                return $licencia ? $licencia->id : null;
            default:
                return null;
        }
    }
}
