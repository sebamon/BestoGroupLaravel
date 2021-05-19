<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusquedaInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('busqueda_inscripcion');
        Schema::create('busqueda_inscripcion', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('idBusqueda');
            $table->unsignedInteger('idInscripcion');
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
        Schema::dropIfExists('busqueda_inscripcion');
    }
}
