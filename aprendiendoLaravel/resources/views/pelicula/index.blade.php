<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            font-family: sans-serif;
            color: #383838;
        }
    </style>
    <title>Películas</title>
</head>
<body>
    <h1>{{ $titulo }}</h1>
    <p>Acción index del controlador PeliculasController</p>
    <hr>
    <p>Página: {{ $pagina or '1' }}</p>
    <a href="{{ action('PeliculaController@detalle') }}">Ir al detalle, con action</a>
    <a href="{{ route('detalle.pelicula') }}">Ir al detalle, con route</a>
</body>
</html>