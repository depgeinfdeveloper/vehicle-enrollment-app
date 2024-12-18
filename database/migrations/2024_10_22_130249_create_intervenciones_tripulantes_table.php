<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervencionesTripulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervenciones_tripulantes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_tripulante_id');
            $table->bigInteger('intervencion_id');
            $table->bigInteger('tipo_nacionalidad_id');
            $table->bigInteger('tipo_documento_id');
            $table->bigInteger('tipo_genero_id');
            $table->bigInteger('tipo_distrito_id');
            $table->string('num_doc', 20);
            $table->string('apellidos', 100);
            $table->string('nombres', 100);
            $table->date('fecha_nacimiento');
            $table->date('fecha_emision'); // Asegúrate de que esta línea esté presente
            $table->date('fecha_caducidad');
            $table->string('direccion');
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
        Schema::dropIfExists('intervenciones_tripulantes');
    }
}
