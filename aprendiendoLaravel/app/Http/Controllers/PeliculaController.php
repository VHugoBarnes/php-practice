<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    
    public function index($pagina)
    {
        $titulo = 'Listado de mis películas';
        
        return view('pelicula.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    public function detalle($year = null)
    {
        return view('pelicula.detalle');
    }

    public function redirigir()
    {
        // return \redirect()->action('PeliculaController@detalle');
        // return redirect('/');
        return redirect()->route('detalle.pelicula');
    }

}
