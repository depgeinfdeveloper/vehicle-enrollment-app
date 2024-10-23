<?php

namespace Database\Seeders;

use App\Models\IntervencionTripulante;
use App\Models\IntervencionTripulanteEspecie;
use Illuminate\Database\Seeder;

class IntervencionTripulanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $intervencionTripulanteIds = IntervencionTripulante::pluck('id')->toArray();

        // Asegúrate de que haya IDs disponibles
        if (!empty($intervencionTripulanteIds)) {
            foreach ($intervencionTripulanteIds as $intervencionTripulanteId) {
                // Para cada intervención de tripulante, crear una especie con tipo_especie_id igual a 1
                IntervencionTripulanteEspecie::factory()->create([
                    'intervencion_tripulante_id' => $intervencionTripulanteId,
                    'tipo_especie_id' => 1, // Aseguramos que el tipo_especie_id sea igual a 1
                ]);
            }
        } else {
            // Manejar el caso donde no hay intervenciones de tripulantes existentes
            $this->command->info('No hay intervenciones de tripulantes disponibles para insertar especies.');
        }
    }
}
