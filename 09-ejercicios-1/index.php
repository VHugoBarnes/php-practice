<?php

/**
 * Ejercicio 1. Crear dos variables "pais" y "continente" y mostrar su valor por pantalla
 * (imprimir). Poner en un comentario que tipo de dato tienen.
 */

echo "<h1>Ejercicio 1</h1>";

$pais = "México";
$continente = "Ámerica";

echo "La variable pais contiene el valor $pais y es de tipo " . gettype($pais) . ".";
echo "<br/>";
echo "La variable continente contiene el valor $continente y es de tipo " . gettype($continente) . ".";

/**
 * Ejercicio 2. Escribir un script en php que nos muestre por pantalla los números pares
 * que hay del 0 al 100.
 */

echo "<h1>Ejercicio 2</h1>";

for ($i=0; $i < 100; $i++) { 
    if($i % 2 == 0) {
        echo "<p>${i}</p>";
    }
}

/**
 * Ejercicio 3. Escribir un programa que imprima por pantalla los cuadros 
 * (un número multiplicado por sí mismo) de los 40 primeros números naturales
 * PD: Utilizar un bucle while.
 */

echo "<h1>Ejercicio 3</h1>";

$contador = 0;

while($contador <= 40) {
    $cuadrado = $contador * $contador;
    echo "<p>$cuadrado</p>";
    $contador++;
}

/**
 * Ejercicio 4. Recoger dos números por url (Parámetros get) y hacer todas las operaciones
 * básicas de una calculadora (suma, resta, multiplicacion y división) de esos dos números
 */

echo "<h1>Ejercicio 4</h1>";

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

// Suma
echo "<p>$numero1 + $numero2 = " . ($numero1 + $numero2) . "</p>";
echo "<p>$numero1 - $numero2 = " . ($numero1 - $numero2) . "</p>";
echo "<p>$numero1 * $numero2 = " . ($numero1 * $numero2) . "</p>";
echo "<p>$numero1 / $numero2 = " . ($numero1 / $numero2) . "</p>";

/**
 * Ejercicio 5. Hacer un programa que muestre todos los numeros entre dos números
 * que nos lleguen por get
 */
echo "<h1>Ejercicio 5</h1>";

if(isset($_GET['numero1'])&& isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 < $numero2) {
        for($i = $numero1; $i <= $numero2; $i++) {
            echo "<h4>$i</h4>";
        }
    } else {
        echo "<p>El primer número es más pequeño que el segundo</p>";
    }

} else {
    echo "<p>Ingresa los números por la url</p>";
}
