<?php

namespace Database\Factories;

use App\Models\IntervencionTripulante;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class IntervencionTripulanteFactory extends Factory
{
    protected $model = IntervencionTripulante::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'intervencion_id' => $this->faker->randomElement($this->getIntervencionIds()), // Asumiendo que tienes IDs de intervenciones
            'tipo_nacionalidad_id' => $this->faker->randomElement($this->getTipoNacionalidadIds()),
            'tipo_documento_id' => $this->faker->randomElement($this->getTipoDocumentoIds()),
            'tipo_genero_id' => $this->faker->randomElement($this->getTipoGeneroIds()),
            'tipo_distrito_id' => $this->faker->randomElement($this->getTipoDistritoIds()),
            'num_doc' => $this->faker->unique()->numerify('########'),
            'apellidos' => $this->faker->lastName(),
            'nombres' => $this->faker->firstName(),
            'fecha_nacimiento' => $this->faker->date(),
            'fecha_emision' => $this->faker->date(),
            'fecha_caducidad' => $this->faker->date(),
            'direccion' => $this->faker->address(),
            'estado' => true,
        ];
    }

    public function createForIntervencion($intervencionId)
    {
        // Crear dos registros, uno para cada tipo_tripulante_id
        IntervencionTripulante::create(array_merge($this->definition(), [
            'intervencion_id' => $intervencionId,
            'tipo_tripulante_id' => 1,
        ]));

        IntervencionTripulante::create(array_merge($this->definition(), [
            'intervencion_id' => $intervencionId,
            'tipo_tripulante_id' => 2,
        ]));
    }

    // Métodos para obtener IDs de las tablas existentes
    protected function getIntervencionIds()
    {
        return DB::table('intervenciones')->pluck('id')->toArray();
    }

    protected function getTipoNacionalidadIds()
    {
        return DB::table('tipo_nacionalidad')->pluck('id')->toArray();
    }

    protected function getTipoDocumentoIds()
    {
        return DB::table('tipo_documento')->pluck('id')->toArray();
    }

    protected function getTipoGeneroIds()
    {
        return DB::table('tipo_genero')->pluck('id')->toArray();
    }

    protected function getTipoDistritoIds()
    {
        return DB::table('tipo_distrito')->pluck('id')->toArray();
    }


}
