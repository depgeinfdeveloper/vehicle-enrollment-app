<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateIntervencionesTripulantesEspeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervenciones_tripulantes_especies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('intervencion_tripulante_id');
            $table->bigInteger('tipo_especie_id');
            $table->text('detalle_especie');
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
        Schema::dropIfExists('intervenciones_tripulantes_especies');
    }
}
