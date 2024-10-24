<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervencionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervenciones', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_intervencion');
            $table->time('hora_intervencion');
            $table->string('latitud', 20);
            $table->string('longitud', 20);
            $table->bigInteger('tipo_distrito_id');
            $table->bigInteger('tipo_estado_vehiculo_id');
            $table->bigInteger('vehiculo_id');
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
        Schema::dropIfExists('intervenciones');
    }
}
