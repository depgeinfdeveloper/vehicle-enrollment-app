<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TipoCategoriaVehiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {

        $categorias = [
            "L1",
            "L2",
            "L3",
            "L4",
            "L5",
            "L6",
            "L7",
            "M1",
            "M1 - SA",
            "M1 - SC",
            "M1 - SD",
            "M1 - SE",
            "M1 - SF",
            "M2 - C1",
            "M2 - C2",
            "M2 - C3",
            "M2 - SA",
            "M2 - SC",
            "M2 - SD",
            "M2 - SE",
            "M2 - SF",
            "M2 - SG",
        ];
        return [
            "codigo" => $this->faker->randomElement($categorias),
            "descripcion" => $this->faker->text()
        ];
    }
}
