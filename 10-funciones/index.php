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

// Funciones predefinidas
echo "<br/>";

// Debug
$nombre = "Keko";
var_dump($nombre);
echo "<br/>";

// Fechas
echo date('d-m-Y');
echo "<br/>";

// Time
echo time();
echo "<br/>";

// Funciones matemáticas
echo "Raiz cuadrada de 10: " . sqrt(10);
echo "<br/>";

echo "Número aleatorio entre 10 y 40: " . rand(10, 40);
echo "<br/>";

echo "Número PI: " . pi();
echo "<br/>";

echo "Redondear: " . round(30.45425, 1);
echo "<br/>";

// Más funciones generales
echo gettype($nombre);
echo "<br/>";

// Comprobar si una variable es de un tipo específico
if(is_string($nombre)) {
    echo "Esa variable es de tipo string";
    echo "<br/>";
} else {
    echo "Esa variable no es de tipo string";
    echo "<br/>";
}

// Comprobar si una variable existe
if(isset($edades)) {
    echo "La variable edades existe";
    echo "<br/>";
} else {
    echo "La variable edades no existe";
    echo "<br/>";
}

$frase = "     mi contenido    ";
echo trim($frase);
echo "<br/>";

// Eliminar variables o índices de arrays
$year = 2021;
unset($year);
var_dump($year);
echo "<br/>";

// empty - comprobar variables vacías
// $texto;
$texto = "";

if(empty($texto)) {
    echo "La variable está vacía";
    echo "<br/>";
} else {
    echo "La variable no está vacía";
    echo "<br/>";
}

// strlen - contar caracteres de un string
$cadena = "123456";

echo strlen($cadena);
echo "<br/>";

// strpos - encontrar caracter
$frase = "Keko kaka";
echo strpos($frase, 'ko');
echo "<br/>";

// Reemplazar contenido de un string
$frase = str_replace('Keko', 'Malia', $frase);
echo $frase;
echo "<br/>";

// Convertir a mayúsculas y minúsculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);
echo "<br/>";
