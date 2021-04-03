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

}
