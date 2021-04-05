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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas/{pagina?}', [
    'uses' => 'PeliculaController@index',
    'as' => 'index.pelicula'
    ])
    ->where(array('pagina' => '[0-9]+'));

Route::get('/peliculas/detalle/{year?}', [
    'middleware' => 'testyear',
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'
]);

Route::get('/peliculas/redirigir', [
    'uses' => 'PeliculaController@redirigir',
    'as' => 'redirigir.pelicula'
]);

Route::get('/peliculas/formulario', [
    'uses' => 'PeliculaController@formulario',
    'as' => 'formulario.pelicula'
]);

Route::post('/peliculas/recibir', [
    'uses' => 'PeliculaController@recibir',
    'as' => 'recibir.peliculas'
]);

Route::get('/frutas', [
    'uses' => 'FrutaController@index',
    'as' => 'index.frutas'
]);

Route::prefix('/frutas')->group(function () {
    Route::get('/detail/{id?}', [
        'uses' => 'FrutaController@detail',
        'as' => 'detail.fruta'
    ])->where(array('id' => '[0-9]+'));

    Route::get('/crear', [
        'uses' => 'FrutaController@create',
        'as' => 'crear.fruta'
    ]);

    Route::post('/save', [
        'uses' => 'FrutaController@save',
        'as' => 'save.fruta'
    ]);
});


Route::resource('/usuario', 'UsuarioController');
