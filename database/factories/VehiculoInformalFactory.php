<?php

namespace Database\Factories;

use App\Models\VehiculoInformal;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculoInformalFactory extends Factory
{
    protected $model = VehiculoInformal::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_categoria' => $this->faker->word, // Tipo de categoría
            'tipo_color' => $this->faker->colorName, // Color del vehículo
            'combustible' => $this->faker->word, // Tipo de combustible
            'tipo_marca' => $this->faker->word, // Marca
            'modelo' => $this->faker->word, // Modelo
            'motor' => $this->faker->regexify('[A-Z]{3}[0-9]{3}'), // Motor
            'num_asientos' => $this->faker->numberBetween(2, 10), // Número de asientos
            'num_ejes' => $this->faker->numberBetween(2, 4), // Número de ejes
            'num_pasajeros' => $this->faker->numberBetween(0, 10), // Número de pasajeros
            'num_ruedas' => $this->faker->numberBetween(2, 12), // Número de ruedas
            'num_series' => $this->faker->uuid, // Número de serie
            'estado' => $this->faker->boolean(), // Estado (activo/inactivo)
        ];
    }
}
