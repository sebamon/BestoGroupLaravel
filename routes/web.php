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

// Bienvenida de Laravel:
Route::get('/', function () {
    return view('welcome');
});

Route::resource('busqueda', BusquedaController::class);
Route::resource('inscripcion', InscripcionController::class);
Route::resource('rubro', RubroController::class);

// Ejercicio:
Route::get('/main', function () {
    return view('main');
});
Route::get('/buscar', function () {
    return view('busqueda/index');
});

//Route::get('/busqueda','BusquedaController@index');
//  Route::get('busqueda',[BusquedaController::class,'index'])->name('busqueda.index');
//  Route::get('busqueda/{id}',[BusquedaController::class,'show'])->name('busqueda.show');

// Prueba con TP2ej2.php para cargar Bootstrap y contenidos de public:
Route::get('/ejemplo', function () {
    return view('TP2/TP2ej2');
});
Route::redirect('/tabs', '/TP2/tabs');