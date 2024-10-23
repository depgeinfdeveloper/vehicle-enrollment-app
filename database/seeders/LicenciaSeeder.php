<?php

namespace Database\Seeders;

use App\Models\IntervencionTripulante;
use App\Models\Licencia;
use App\Models\TipoDistrito;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class LicenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $intervencionTripulantes = IntervencionTripulante::where('tipo_tripulante_id', 1)->get();

        if ($intervencionTripulantes->isNotEmpty()) {
            foreach ($intervencionTripulantes as $tripulante) {
                $tipoDistritoId = TipoDistrito::inRandomOrder()->first()->id;

                Licencia::create([
                    'intervencion_tripulante_id' => $tripulante->id,
                    'nro_licencia' => $faker->unique()->numerify('L#####'),
                    'tipo_distrito_id' => $tipoDistritoId,
                    'fecha_expedicion' => $faker->date(),
                    'fecha_expira' => $faker->dateTimeBetween('now', '+5 years'),
                    'situacion' => $faker->randomElement(['Vigente', 'Caducado', 'En Trámite']),
                    'estado' => true
                ]);
            }
        } else {
            $this->command->info('No se encontraron Intervenciones Tripulantes con tipo_tripulante_id = 1.');
        }
    }
}
