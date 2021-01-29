<?php

/**
 * Ejercicio 1. Crear dos variables "pais" y "continente" y mostrar su valor por pantalla
 * (imprimir). Poner en un comentario que tipo de dato tienen.
 */

$pais = "México";
$continente = "Ámerica";

echo "La variable pais contiene el valor $pais y es de tipo " . gettype($pais) . ".";
echo "<br/>";
echo "La variable continente contiene el valor $continente y es de tipo " . gettype($continente) . ".";

/**
 * Ejercicio 2. Escribir un script en php que nos muestre por pantalla los números pares
 * que hay del 0 al 100.
 */

for ($i=0; $i < 100; $i++) { 
    if($i % 2 == 0) {
        echo "<p>${i}</p>";
    }
}