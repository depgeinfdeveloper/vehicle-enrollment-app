<?php

namespace Database\Seeders;

use App\Models\Intervencion;
use App\Models\IntervencionInstructor;
use App\Models\IntervencionTipoUsoDetalle;
use App\Models\IntervencionTripulante;
use Illuminate\Database\Seeder;

class IntervencionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $intervenciones = Intervencion::factory()->count(10)->create(); // Cambia el número según necesites

        foreach ($intervenciones as $intervencion) {
            // Para cada intervención, crear tripulantes
            IntervencionTripulante::factory()->createForIntervencion($intervencion->id);
        }

        foreach ($intervenciones as $intervencion) {
            // Para cada intervención, crear instructores
            IntervencionInstructor::factory()->createForIntervencion($intervencion->id);
        }

        foreach ($intervenciones as $intervencion) {
            // Para cada intervención, crear los tipos de uso
            IntervencionTipoUsoDetalle::factory()->createForIntervencion($intervencion->id);
        }
    }
}
