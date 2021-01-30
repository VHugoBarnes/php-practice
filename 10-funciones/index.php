<?php

/**
 * Funciones
 */

function muestraNombres() {
    echo "Keko Kaka <br/>";
    echo "Malia Kaka <br/>";
    echo "Reba Kaka <br/>";
    echo "Mochi Kaka <br/>";
    echo "Nicole Rodriguez <br/>";
}

muestraNombres();

// Ejemplo 2
function numero($n) {
    echo "<p>$n</p>";
}

numero(2);

// Ejemplo 3
function calculadora($numero1, $numero2) {
    // Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    echo "<p>Suma: $suma</p>";
    echo "<p>Resta: $resta</p>";
    echo "<p>Multiplicacion: $multiplicacion</p>";
    echo "<p>Division: $division</p>";

}

calculadora(5, 4);

// Returns 

function getNombre($nombre) {
    return $nombre;
}

echo "<p>" .getNombre("Keko"). "</p>";

// Variables globales y locales
$frase = "Quiero mucho a keko kaka"; // Variable global

echo $frase;

function funcion() {

    global $frase; // uso de una variable global

    echo $frase;

    $year = 2021;
}

echo $year;

funcion();
