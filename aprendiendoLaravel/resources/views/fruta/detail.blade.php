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
    <title>Detalle de la fruta: {{ $fruta->nombre }}</title>
</head>
<body>
    <h1>{{ $fruta->nombre }}</h1>
    <p>Descripción: {{ $fruta->descripcion }}</p>

    <h3><a href="{{ action('FrutaController@delete', ['id' => $fruta->id]) }}">Eliminar</a></h3>
    <h3><a href="">Actualizar</a></h3>
</body>
</html>