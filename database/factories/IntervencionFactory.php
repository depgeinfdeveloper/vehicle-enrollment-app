<?php

namespace Database\Factories;

use App\Models\Intervencion;
use App\Models\TipoDistrito;
use App\Models\TipoEstadoVehiculo;
use App\Models\VehiculoFormal;
use App\Models\VehiculoInformal;
use Illuminate\Database\Eloquent\Factories\Factory;

class IntervencionFactory extends Factory
{
    protected $model = Intervencion::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tipoDistritoId = TipoDistrito::inRandomOrder()->pluck('id')->first();
        $tipoEstadoVehiculoId = TipoEstadoVehiculo::inRandomOrder()->pluck('id')->first();
        $vehiculoFormalId = VehiculoFormal::inRandomOrder()->pluck('id')->first();
        $vehiculoInformalId = VehiculoInformal::inRandomOrder()->pluck('id')->first();
        return [
            'fecha_intervencion' => $this->faker->date(), // Fecha de la intervención
            'hora_intervencion' => $this->faker->time(), // Hora de la intervención
            'latitud' => $this->faker->latitude(), // Latitud
            'longitud' => $this->faker->longitude(), // Longitud
            'tipo_distrito_id' => $tipoDistritoId, // ID de tipo de distrito
            'tipo_estado_vehiculo_id' => $tipoEstadoVehiculoId, // ID de tipo de estado de vehículo
            'vehiculo_id' => $tipoEstadoVehiculoId == 1 ? $vehiculoFormalId : $vehiculoInformalId, // ID del vehículo
            'estado' => true, // Estado (activo/inactivo)
        ];
    }
}
