<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\RubroController;
use App\Http\Controllers\InscripcionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Vistas configuradas:
Route::redirect('/', '/home');
Route::view('/home', 'home');

// Carga todos los recursos de cada carpeta:
Route::resource('busqueda', BusquedaController::class);
Route::get('busqueda/rubro/{idRubro}',[BusquedaController::class,'busquedaRubro'])->name('busqueda.busquedaRubro');
Route::get('inscripciones/busqueda/{idBusqueda}',[InscripcionController::class,'inscripcionBusqueda'])->name('inscripcion.inscripcionBusqueda');

Route::resource('inscripcion', InscripcionController::class);
Route::resource('rubro', RubroController::class);

//Route::get('/busqueda','BusquedaController@index');
//  Route::get('busqueda',[BusquedaController::class,'index'])->name('busqueda.index');
//  Route::get('busqueda/{id}',[BusquedaController::class,'show'])->name('busqueda.show');
