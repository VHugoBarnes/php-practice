<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            color: #3b3b3b;
            font-family: sans-serif;
        }

    </style>
    <title>Listado de películas</title>
</head>

<body>
    {{-- Interpolación de variables --}}
    <h1>{{ $titulo }}</h1>
    <h2>{{ $listado[0] }}</h2>
    <h2>{{ $listado[1] }}</h2>
    <h2>{{ $listado[2] }}</h2>
    <h2>{{ $listado[3] }}</h2>
    <h3>{{ date('Y') }}</h3>

    {{-- Comentarios --}}
    <!-- HTML Comentario -->
    {{-- Blade Comentario --}}

    {{-- Mostrar si existe --}}
    <p><?= isset($director) ? $director : 'No hay director' ?></p>
    <p>{{ $director or 'No hay director' }}</p>

    {{-- Condicionales --}}
    @if ($titulo && count($listado) >= 5)
        <p>El título existe y es éste {{ $titulo }} y el listado es mayor a 5</p>
    @elseif ($titulo && count($listado) <= 5)
        <p>El título existe y es éste {{ $titulo }} y el listado es menor a 5</p>
    @else
        <p>El título no existe</p>
    @endif

    {{-- Bucles --}}
    @for ($i=0; $i<=20; $i++)
        <p>{{ $i }}</p>
    @endfor

    <hr>
    <?php $contador = 1 ?>
    @while ($contador < 50)
        @if ($contador % 2 == 0)
            <p>{{ $contador }}</p>
        @endif
        <?php $contador++; ?>
    @endwhile

    <hr>
    @foreach ($listado as $index => $item)
        <p>{{ $item }}</p>
    @endforeach

</body>
</html>
