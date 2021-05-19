<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusquedaRubroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('busqueda_rubro');
        Schema::create('busqueda_rubro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('idBusqueda');
            $table->foreign('idBusqueda')->references('idBusqueda')->on('busquedas'); // clave foranea
            $table->unsignedInteger('idRubro');
            $table->foreign('idRubro')->references('idRubro')->on('rubros');
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
        Schema::dropIfExists('busqueda_rubro');
    }
}
