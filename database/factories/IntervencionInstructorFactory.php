<?php

namespace Database\Factories;

use App\Models\IntervencionInstructor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class IntervencionInstructorFactory extends Factory
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
            'estado' => true,
        ];
    }

    public function createForIntervencion($intervencionId){
        IntervencionInstructor::create(array_merge($this->definition(),[
            'intervencion_id' => $intervencionId,
            'cip_pnp' => '32143695',
            'unidad_pnp' => 'COMOPPOL_DIRIN_DIVSEDIG_DEPARTAMENTO DE GESTION DE INFORMACION'
        ]));

        IntervencionInstructor::create(array_merge($this->definition(),[
            'intervencion_id' => $intervencionId,
            'cip_pnp' => '31770528',
            'unidad_pnp' => 'COMOPPOL_DIRIN_DIVSEDIG_DEPARTAMENTO DE GESTION DE INFORMACION'
        ]));
    }

    protected function getIntervencionIds()
    {
        return DB::table('intervenciones')->pluck('id')->toArray();
    }
}
