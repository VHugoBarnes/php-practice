<?php

/**
 * Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 números enteros
 * y que haga lo siguiente:
 * 
 *  - Recorrerlo y mostrarlo.
 *  - Ordenarlo y mostrarlo.
 *  - Mostrar su longitud.
 *  - Buscar algún elemento.
 */
echo "<h1>Ejercicio 1</h1>";
$arreglo = [4, 7, 54, 777, 8, 2, 1, -43, 10];

// Recorrer el arreglo
echo "<h1>Recorrer arreglo</h1>";
echo "<ul>";
foreach ($arreglo as $key => $item) {
    echo "<li>".$item."</li>";
}
echo "</ul>";
echo "</br>";
echo "<hr>";

// Ordenarlo y mostrarlo
$arreglo_ordenado = $arreglo;
sort($arreglo_ordenado);
echo "<h1>Ordenarlo y mostrarlo</h1>";
echo "<ul>";
foreach ($arreglo_ordenado as $key => $i) {
    echo "<li>".$i."</li>";
}
echo "</ul>";
echo "</br>";
echo "<hr>";

// Mostrar su longitud
echo "<h1>Mostrar su longitud</h1>";
echo "<p>La longitud del arreglo es de ". count($arreglo) ."</p>";
echo "<hr>";

// Buscar un elemento
echo "<h1>Buscar un elemento</h1>";
$indice = array_search('777', $arreglo);
echo "<p>Se busca el elemento 777</p>";
echo "<ul>";
foreach ($arreglo as $key => $item) {
    echo "<li>".$item."</li>";
}
echo "</ul>";
echo "El elemento 777 se encuentra en la posición $indice (contando a partir del 0).";
echo "</br>";
echo "<hr>";

/**
 * Ejercicio 2. Escribir un programa en PHP que añada valores a un array mientras
 * su longitud sea mayor a 120 y luego mostrarlo por pantalla.
 */

$arr = [];
echo "<h1>Ejercicio 2</h1>";
for($i = 0; $i <= 120; $i++){
    array_push($arr, $i);
}

echo "<ul>";
for($j=0; $j < count($arr); $j++) {
    echo "<li>". $arr[$j] ."</li>";
}
echo "</ul>";
