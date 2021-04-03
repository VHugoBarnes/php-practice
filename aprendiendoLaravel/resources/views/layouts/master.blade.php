<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            color: #282828;
            font-family: sans-serif;
        }
    </style>
    <title>Título - @yield('title')</title>
</head>
<body>
    @section('header')
        <h1>Cabecera de la web</h1>
    @show

    <div class="container">
        @yield('content')
    </div>

    @section('footer')
        <h3>Pie de página</h3>
    @show
</body>
</html>