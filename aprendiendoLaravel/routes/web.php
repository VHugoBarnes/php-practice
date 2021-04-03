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

Route::get('/peliculas/{pagina?}', 'PeliculaController@index')
    ->where(array('pagina' => '[0-9]+'));

Route::get('/peliculas/detalle', [
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'
]);

Route::resource('/usuario', 'UsuarioController');
