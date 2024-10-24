<?php

namespace Database\Factories;

use App\Models\VehiculoFormal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

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
        $faker = Faker::create('es_ES');

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
            'placa' => $faker->unique()->bothify('??###'), // Ejemplo: AB1234
            'altura' => $faker->randomFloat(2, 1.5, 3.5),
            'ancho' => $faker->randomFloat(2, 1.0, 2.5),
            'anio_fabricacion' => $faker->year($max = 'now'),
            'anio_modelo' => $faker->year($max = 'now'),
            'carga_util' => $faker->randomFloat(2, 500, 5000),
            'carroceria' => $faker->word,
            'tipo_categoria' => $faker->randomElement($categorias), // Selecciona un valor aleatorio del array
            'cilindrada' => $faker->randomNumber(3),
            'tipo_color' => $faker->colorName,
            'combustible' => $faker->word,
            'rodante' => $faker->word,
            'longitud' => $faker->randomFloat(2, 3.0, 8.0),
            'tipo_marca' => $faker->word,
            'modelo' => $faker->word,
            'motor' => $faker->regexify('[A-Z]{3}[0-9]{3}'),
            'num_asientos' => $faker->numberBetween(2, 12),
            'num_ejes' => $faker->numberBetween(2, 6),
            'num_pasajeros' => $faker->numberBetween(0, 12),
            'num_ruedas' => $faker->numberBetween(2, 18),
            'num_series' => $faker->uuid,
            'num_version' => $faker->word,
            'oficina' => $faker->word,
            'peso_bruto' => $faker->randomFloat(2, 1000, 15000),
            'peso_neto' => $faker->randomFloat(2, 800, 12000),
            'potencia' => $faker->randomFloat(2, 50, 500),
            'vin' => $faker->regexify('[A-Z0-9]{17}'),
            'estado' => true,
        ];
    }
}
