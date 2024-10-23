<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class IntervencionTripulanteEspecieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'intervencion_tripulante_id' => $this->faker->randomElement($this->getIntervencionTripulanteIds()),
            'tipo_especie_id' => 1,
            'detalle_especie' => $this->faker->sentence(),
            'estado' => $this->faker->boolean(),
        ];
    }

    protected function getIntervencionTripulanteIds()
    {
        return DB::table('intervenciones_tripulantes')->pluck('id')->toArray();
    }
}
