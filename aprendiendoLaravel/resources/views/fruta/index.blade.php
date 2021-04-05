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

        #session {
            background: #99ce76;
        }
    </style>
    <title>Listado de frutas</title>
</head>
<body>
    <h1>Frutas disponibles</h1>
    @if (session('status'))
        <p id="session">{{ session('status') }}</p>
    @endif
    <h3><a href="{{ action('FrutaController@create') }}">Crear fruta</a></h3>
    <ul>
        @foreach ($frutas as $fruta)
            <li><a href="{{ action('FrutaController@detail', ['id' => $fruta->id]) }}">{{ $fruta->nombre }}</a></li>
        @endforeach
    </ul>
</body>
</html>