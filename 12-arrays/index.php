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
echo "<br>";

// Funciones para arrays
echo "<h1>Funciones para los arrays</h1>";
$numeros = [4, 5, 21, 5, 1, 64, 6432, 33, 7];
asort($artistas);
var_dump($artistas);
echo "<br>";

sort($numeros);
var_dump($numeros);
echo "<br>";

// añadir elementos a un array
$artistas[] = "Jazmin Bean";
array_push($artistas, 'Paramore');

// Eliminar elementos
array_pop($artistas);
unset($artistas[2]);

// Aleatorio
$indice = array_rand($artistas);
echo $artistas[$indice];
echo "<br>";

// Dar la vuelta
var_dump(array_reverse($artistas));
echo "<br>";

// Buscar dentro de un array
var_dump(array_search('Aurora', $artistas)); // Obtiene el índice
echo "<br>";

// Conteo del array
echo count($artistas);
echo "<br>";
echo sizeof($artistas);
echo "<br>";

var_dump($artistas);
echo "<br>";
