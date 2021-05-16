<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Prueba con TP2ej2.php para cargar Bootstrap y contenidos de public:
Route::get('/ejemplo', function () {
    return view('TP2/TP2ej2');
});
Route::redirect('/tabs', '/TP2/tabs');