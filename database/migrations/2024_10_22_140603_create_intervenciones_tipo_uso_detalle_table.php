<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateIntervencionesTipoUsoDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervenciones_tipo_uso_detalle', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('intervencion_id');
            $table->bigInteger('tipo_uso_vehiculo_id');
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intervenciones_tipo_uso_detalle');
    }
}
