<?php

namespace Database\Factories;

use App\Models\VehiculoFormal;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculoFormalFactory extends Factory
{
    protected $model = VehiculoFormal::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'placa' => $this->faker->unique()->bothify('??###'), // Ejemplo: AB1234
            'altura' => $this->faker->randomFloat(2, 1.5, 3.5), // Altura en metros
            'ancho' => $this->faker->randomFloat(2, 1.0, 2.5), // Ancho en metros
            'anio_fabricacion' => $this->faker->year($max = 'now'), // Año de fabricación
            'anio_modelo' => $this->faker->year($max = 'now'), // Año del modelo
            'carga_util' => $this->faker->randomFloat(2, 500, 5000), // Carga útil en kg
            'carroceria' => $this->faker->word, // Tipo de carrocería
            'tipo_categoria' => $this->faker->word, // Tipo de categoría
            'cilindrada' => $this->faker->randomNumber(3), // Cilindrada en cc
            'tipo_color' => $this->faker->colorName, // Color
            'combustible' => $this->faker->word, // Tipo de combustible
            'rodante' => $this->faker->word, // Tipo de rodante
            'longitud' => $this->faker->randomFloat(2, 3.0, 8.0), // Longitud en metros
            'tipo_marca' => $this->faker->word, // Marca
            'modelo' => $this->faker->word, // Modelo
            'motor' => $this->faker->regexify('[A-Z]{3}[0-9]{3}'), // Motor
            'num_asientos' => $this->faker->numberBetween(2, 12), // Número de asientos
            'num_ejes' => $this->faker->numberBetween(2, 6), // Número de ejes
            'num_pasajeros' => $this->faker->numberBetween(0, 12), // Número de pasajeros
            'num_ruedas' => $this->faker->numberBetween(2, 18), // Número de ruedas
            'num_series' => $this->faker->uuid, // Número de serie
            'num_version' => $this->faker->word, // Número de versión
            'oficina' => $this->faker->word, // Oficina asignada
            'peso_bruto' => $this->faker->randomFloat(2, 1000, 15000), // Peso bruto en kg
            'peso_neto' => $this->faker->randomFloat(2, 800, 12000), // Peso neto en kg
            'potencia' => $this->faker->randomFloat(2, 50, 500), // Potencia en HP
            'vin' => $this->faker->regexify('[A-Z0-9]{17}'), // Número VIN
            'estado' => true, // Estado (activo/inactivo)
        ];
    }
}
