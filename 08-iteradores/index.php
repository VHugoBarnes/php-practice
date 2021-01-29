<?php

// Bucle while
/**
 * Estructura de control multilínea que itera o repite la ejecución de una serie 
 * de instrucciones tantas veces como sea necesario, en base a una condición.
 */

$numero = 0;

//  while ($numero <= 10) {
//     echo "<h1>". $numero ."</h1>";
//     $numero++;
//  }

if(isset($_GET['numero'])) {
    // Castear a entero
    $numero = (int) $_GET['numero'];
} else {
    $numero = 1;
}

var_dump($numero);
echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;
while($contador <= 10) {
    echo "<p>$numero x $contador = " . ($numero * $contador) . "</p>";
    $contador++;
}

echo "<br/>";

// Do-while
$edad = 18;
$contador = 1;

do {
    echo "<p>Tienes acceso al local privado $contador</p>";
    $contador++;
} while ($edad >= 18 && $contador <= 10);


?>