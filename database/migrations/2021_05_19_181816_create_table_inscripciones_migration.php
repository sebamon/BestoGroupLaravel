<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInscripcionesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id('idInscripcion');
            $table->unsignedBigInteger('idBusqueda');
            $table->date('fecha');
            $table->string('apellido');
            $table->string('nombre');
            $table->timestamps();
            $table->foreign('idBusqueda')->references('idBusqueda')->on('busquedas'); // clave foranea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripciones');
    }
}
