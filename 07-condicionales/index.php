<?php

// Operadores de comparación
// == igual
// === identico
// != diferente
// <> diferente
// !== no identico
// < menor que
// > mayor que
// <= menor o igual que
// >= mayor o igual que

$color = "verde";

if($color == "rojo"){
    echo "el color es rojo";
} else {
    echo "el color no es rojo";
}

// Operadores de comparación
$nombre = 'Keko Perez';
$edad = 42;
$mayoria_edad = 18;

if($edad >= $mayoria_edad) {
    echo $nombre . ' es mayor de edad';
} else {
    echo $nombre . 'no es mayor de edad';
}

// else-if
$dia = 3;

if($dia == 1) {
    echo 'Lunes';
} else if($dia == 2) {
    echo 'Martes';
} else if($dia == 3) {
    echo 'Miercoles';
} else if($dia == 4) {
    echo 'Jueves';
} else if($dia == 5) {
    echo 'Viernes';
} else {
    echo 'Es fin de semana';
}

echo '<br/>';

// Ejercicio 5. Operadores lógicos
/**
 * Operadores lógicos
 * && AND
 * || OR
 * ! NOT
 */
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo "Está en edad para trabajar";
} else {
    echo "No puede trabajar";
}
echo "<hr/>";
$pais = 'Mexico';

if($pais == 'Mexico' || $pais == 'España' || $pais == 'Argentina') {
    echo "En este país se habla español";
}

// Switch
$dia2 = 2;

switch ($dia) {
    case 1:
        echo "lunes";
        break;
    case 2:
        echo "martes";
        break;
    case 3:
        echo "miercoles";
        break;
    case 4:
        echo "jueves";
        break;
    case 5:
        echo "viernes";
        break;
    
    default:
        echo 'es fin de semana';
        break;
}

?>