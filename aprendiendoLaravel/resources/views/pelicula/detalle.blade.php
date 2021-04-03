<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle película</title>
</head>
<body>
    <h1>Detalle de la película</h1>
    <a href="{{ action('PeliculaController@index', $pagina=20) }}">Ir al listado, con action</a>
    <a href="{{ route('index.pelicula', $pagina=30) }}">Ir al listado, con route</a>
</body>
</html>