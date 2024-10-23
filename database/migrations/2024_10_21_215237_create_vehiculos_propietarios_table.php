<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosPropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos_propietarios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vehiculo_id')->unsigned();
            $table->string('apellidos_nombres');
            $table->string('direccion');
            $table->string('tipo_propietario', 5);
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
        Schema::dropIfExists('vehiculos_propietarios');
    }
}
