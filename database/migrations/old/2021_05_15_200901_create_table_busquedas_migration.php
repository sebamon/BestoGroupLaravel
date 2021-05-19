<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBusquedasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('rubros');
        Schema::create('rubros', function (Blueprint $table) {
            $table->increments('idRubro');
            $table->string('descripcion');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();

        Schema::dropIfExists('busquedas');
        Schema::create('busquedas', function (Blueprint $table) {
            $table->increments('idBusqueda');
            $table->unsignedBigInteger('idRubro');
            $table->foreign('idRubro')->references('idRubro')->on('rubros'); // clave foranea
            $table->text('empresa');
            $table->text('titulo');
            $table->text('descripcion');
            $table->timestamps();

        });
        Schema::enableForeignKeyConstraints();
        
       Schema::dropIfExists('inscripciones');
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->increments('idInscripcion');
            $table->unsignedBigInteger('idBusqueda');
           
            $table->date('fecha');
            $table->string('apellido');
            $table->string('nombre');
            $table->timestamps();
            $table->foreign('idBusqueda')->references('idBusqueda')->on('busquedas'); // clave foranea
    });
    Schema::enableForeignKeyConstraints();
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('busquedas');
        Schema::enableForeignKeyConstraints();
    }
}
