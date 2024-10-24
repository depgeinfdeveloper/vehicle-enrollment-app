<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosFormalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos_formales', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 6);
            $table->string('altura', 20);
            $table->string('ancho', 20);
            $table->string('anio_fabricacion', 4);
            $table->string('anio_modelo', 4);
            $table->string('carga_util', 20);
            $table->string('carroceria', 20);
            $table->string('tipo_categoria', 20);
            $table->string('cilindrada', 20);
            $table->string('tipo_color', 20);
            $table->string('combustible', 20);
            $table->string('rodante', 20);
            $table->string('longitud', 20);
            $table->string('tipo_marca', 20);
            $table->string('modelo', 20);
            $table->string('motor', 50);
            $table->string('num_asientos', 3);
            $table->string('num_ejes', 3);
            $table->string('num_pasajeros', 3);
            $table->string('num_ruedas', 3);
            $table->string('num_series', 50);
            $table->string('num_version', 20);
            $table->string('oficina', 20);
            $table->string('peso_bruto', 20);
            $table->string('peso_neto', 20);
            $table->string('potencia', 20);
            $table->string('vin', 20);
            $table->boolean('estado')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos_formales');
    }
}
