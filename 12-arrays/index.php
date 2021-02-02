<?php

// Arrays
$pelicula = "Joker";
$peliculas = array("The Pianist", "La la land", "Ladybird", "Inglourious Basterds", "Avengers");

var_dump($peliculas);
echo "<br>";
var_dump($peliculas[2]);
echo "<br>";

$artistas = ['Aurora', 'Kero Kero Bonito', 'The Do', 'Wargasm', 'Sordid Pink'];
var_dump($artistas);
echo "<br>";
var_dump($artistas[4]);
echo "<br>";
echo $artistas[4];
echo "<br>";

// Recorrer arrays
// Con for
echo "<h1>Listado de películas</h1>";
for($i=0; $i < count($peliculas); $i++) {
    echo $peliculas[$i];
    echo "<br>";
}

// Recorrer con foreach
echo "<h1>Listado de artistas</h1>";
foreach($artistas as $artista) {
    echo $artista;
    echo "<br>";
}

// Arrays asociativos
echo "<h1>Arrays asociativos</h1>";
$personas = array(
    'nombre' => 'Víctor',
    'Apellidos' => 'Vázquez',
    'edad' => '21'
);

var_dump($personas);

// Arrays multidimiensionales

$contactos = array(
    array(
        'nombre' => 'Keko',
        'email' => 'keko@mail.com'
    ),
    array(
        'nombre' => 'Malia',
        'email' => 'malia@mail.com'
    ),
    array(
        'nombre' => 'Mochi',
        'email' => 'mochi@mail.com'
    ),
);

echo "<br>";
echo "<br>";
var_dump($contactos);
echo "<br>";
echo $contactos[1]['nombre'];

echo "<br>";
foreach ($contactos as $key => $contacto) {
    var_dump($contacto);
}
