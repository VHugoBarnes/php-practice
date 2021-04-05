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
    <title>Crear frutas</title>
</head>
<body>
    <h1>Crear una fruta</h1>
    <h3><a href="{{ action('FrutaController@index') }}">Ver frutas</a></h3>
    <form action="{{ action('FrutaController@save') }}" method="post">
        {{ csrf_field() }}
        <label for="nombre">Nombre</label> <br>
        <input type="text" name="nombre" id=""> <br>

        <label for="descripcion">Descripcion</label> <br>
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea> <br>

        <label for="precio">Precio</label> <br>
        <input type="text" name="precio" id=""> <br>

        <br><input type="submit" value="Guardar">
    </form>
</body>
</html>