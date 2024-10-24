<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoDistritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_distrito', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ubigeo', 10);
            $table->string('completo', 200);
            $table->boolean('estado')->default(true);
            $table->bigInteger('tipo_prov_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_distrito');
    }
}
