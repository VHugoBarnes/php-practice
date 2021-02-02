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
