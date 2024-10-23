<?php

namespace Database\Factories;

use App\Models\Tripulante;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class TripulanteFactory extends Factory
{
    protected $model = Tripulante::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_nacionalidad_id' => $this->faker->randomElement($this->getTipoNacionalidadIds()), // Obtener ID de nacionalidad
            'tipo_documento_id' => $this->faker->randomElement($this->getTipoDocumentoIds()), // Obtener ID de documento
            'tipo_genero_id' => $this->faker->randomElement($this->getTipoGeneroIds()), // Obtener ID de género
            'tipo_distrito_id' => $this->faker->randomElement($this->getTipoDistritoIds()), // Obtener ID de distrito
            'num_doc' => $this->faker->unique()->numerify('########'), // Genera un número de documento
            'apellidos' => $this->faker->lastName(),
            'nombres' => $this->faker->firstName(),
            'fecha_nacimiento' => $this->faker->date(),
            'direccion' => $this->faker->address(),
            'estado' => true,
        ];
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
