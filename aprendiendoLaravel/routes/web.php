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

Route::get('/pelicula/{titulo}/{year?}', function ($titulo, $year=2021) {
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));

Route::get('/listado-peliculas', function () {

    $titulo = "Listado de películas";
    $listado = array('Batman', 'Spiderman', 'Superman', 'Ironman');

    return view('peliculas.listado')
            ->with('titulo', $titulo)
            ->with('listado', $listado);
});
