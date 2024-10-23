<?php

namespace Database\Factories;

use App\Models\IntervencionTipoUsoDetalle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class IntervencionTipoUsoDetalleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'intervencion_id' => $this->faker->randomElement($this->getIntervencionIds()),
            'tipo_uso_vehiculo_id' => $this->faker->randomElement($this->getTipoUsoVehiculoIds()),
        ];
    }

    public function createForIntervencion($intervencionId)
    {
        // Crear dos registros con diferentes tipo_uso_vehiculo_id
        IntervencionTipoUsoDetalle::create([
            'intervencion_id' => $intervencionId,
            'tipo_uso_vehiculo_id' => $this->getDifferentTipoUsoVehiculoId(), // Obtiene un ID diferente
            'estado' => true,
        ]);

        IntervencionTipoUsoDetalle::create([
            'intervencion_id' => $intervencionId,
            'tipo_uso_vehiculo_id' => $this->getDifferentTipoUsoVehiculoId(), // Obtiene un segundo ID diferente
            'estado' => true,
        ]);
    }

    protected function getIntervencionIds()
    {
        return DB::table('intervenciones')->pluck('id')->toArray();
    }

    protected function getTipoUsoVehiculoIds()
    {
        return DB::table('tipo_uso_vehiculo')->pluck('id')->toArray();
    }

    protected function getDifferentTipoUsoVehiculoId()
    {
        $ids = $this->getTipoUsoVehiculoIds();
        return $this->faker->randomElement($ids);
    }
}
