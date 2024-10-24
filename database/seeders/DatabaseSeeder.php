<?php

namespace Database\Seeders;

use App\Models\Intervencion;
use App\Models\TipoCategoriaVehiculo;
use App\Models\TipoColor;
use App\Models\TipoEntidadArchivo;
use App\Models\VehiculoFormal;
use App\Models\VehiculoInformal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(TipoCategoriaVehiculoSeeder::class);
        $this->call(TipoColorSeeder::class);
        $this->call(TipoDocumentoSeeder::class);
        $this->call(TipoEntidadArchivoSeeder::class);
        $this->call(TipoEspecieSeeder::class);
        $this->call(TipoGeneroSeeder::class);
        $this->call(TipoMarcaVehiculoSeeder::class);
        $this->call(TipoTripulanteSeeder::class);
        $this->call(TipoUsoVehiculoSeeder::class);
        $this->call(TipoEstadoVehiculoSeeder::class);

        $this->executeSqlFile(database_path('sql/tipo_nacionalidad.sql'));
        $this->executeSqlFile(database_path('sql/ubigeo_spanish.sql'));
        VehiculoFormal::factory(10)->create();
        VehiculoInformal::factory(2)->create();

        $this->call(IntervencionSeeder::class);
        $this->call(IntervencionTripulanteSeeder::class);
        $this->call(LicenciaSeeder::class);

        $this->call(VehiculoPropietarioSeeder::class);
        $this->call(ImagenSeeder::class);



    }

    /**
     * Ejecuta un archivo SQL.
     *
     * @param string $filePath
     * @return void
     */
    protected function executeSqlFile(string $filePath)
    {
        // Asegúrate de que el archivo existe
        if (file_exists($filePath)) {
            $sql = file_get_contents($filePath);
            DB::unprepared($sql);
        } else {
            throw new \Exception("El archivo SQL no existe: {$filePath}");
        }
    }
}
