<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateVehiculosInformalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos_informales', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_categoria', 20);
            $table->string('tipo_color', 20);
            $table->string('combustible', 20);
            $table->string('tipo_marca', 20);
            $table->string('modelo', 20);
            $table->string('motor', 50);
            $table->string('num_asientos', 3);
            $table->string('num_ejes', 3);
            $table->string('num_pasajeros', 3);
            $table->string('num_ruedas', 3);
            $table->string('num_series', 50);
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
        Schema::dropIfExists('vehiculos_informales');
    }
}
