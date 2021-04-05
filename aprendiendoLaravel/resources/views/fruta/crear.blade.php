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

    @if (isset($fruta) && is_object($fruta))
        <h1>Editar {{ $fruta->nombre }}</h1>
    @else
        <h1>Crear una fruta</h1>
    @endif

    <h3><a href="{{ action('FrutaController@index') }}">Ver frutas</a></h3>

    <form
        action="{{ isset($fruta) ? action('FrutaController@update', ['id', $fruta->id]) : action('FrutaController@save') }}"
        method="post">
        {{ csrf_field() }}

        @if (isset($fruta) && is_object($fruta))
            <input type="hidden" name="id" value="{{ $fruta->id }}">
        @endif

        <label for="nombre">Nombre</label> <br>
        <input type="text" name="nombre" id="" value="{{ $fruta->nombre or '' }}"> <br>

        <label for="descripcion">Descripcion</label> <br>
        <textarea name="descripcion" id="" cols="30" rows="10">{{ $fruta->descripcion or '' }}</textarea> <br>

        <label for="precio">Precio</label> <br>
        <input type="text" name="precio" id="" value="{{ $fruta->precio or 0 }}"> <br>

        @if (isset($fruta) && is_object($fruta))
            <br><input type="submit" value="Actualizar">
        @else
            <br><input type="submit" value="Guardar">
        @endif
    </form>
</body>

</html>
