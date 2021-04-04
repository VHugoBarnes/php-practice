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
    <title>Listado de frutas</title>
</head>
<body>
    <h1>Frutas disponibles</h1>
    <ul>
        @foreach ($frutas as $fruta)
            <li>{{ $fruta->nombre }}</li>
        @endforeach
    </ul>
</body>
</html>