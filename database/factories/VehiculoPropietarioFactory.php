<?php

namespace Database\Factories;

use App\Models\VehiculoFormal;
use App\Models\VehiculoPropietario;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculoPropietarioFactory extends Factory
{
    protected $model = VehiculoPropietario::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehiculo_id' => VehiculoFormal::inRandomOrder()->first()->id,
            'apellidos_nombres' => $this->faker->name,
            'direccion' => $this->faker->address,
            'tipo_propietario' => $this->faker->randomElement(['PN', 'PL']),
            'estado' => true,
        ];
    }

    public function forVehiculo($vehiculo_id)
    {
        return $this->state(function (array $attributes) use ($vehiculo_id) {
            return [
                'vehiculo_id' => $vehiculo_id,
            ];
        });
    }
}
