<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoProvinciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_provincia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ubigeo', 10);
            $table->string('completo', 200);
            $table->boolean('estado')->default(true);
            $table->bigInteger('tipo_dep_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_provincia');
    }
}
