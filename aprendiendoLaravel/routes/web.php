<?php

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

Route::get('/mostrar-fecha', function () {
    date_default_timezone_set("America/Matamoros");
    $fecha = date('d-m-y');
    return view('mostrar-fecha', array(
        'fecha' => $fecha
    ));
});

Route::get('/pelicula/{titulo?}', function ($titulo='No hay una película seleccionada') {
    return view('pelicula', array(
        'titulo' => $titulo
    ));
});
