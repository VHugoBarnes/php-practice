<?php

// Operadores aritmeticos
$numero1 = 55;
$numero2 = 33;

echo 'Suma: ' . ( $numero1 + $numero2 ) . '<br/>';
echo 'Resta: ' . ( $numero1 - $numero2 ) . '<br/>';
echo 'Multiplicación: ' . ( $numero1 * $numero2 ) . '<br/>';
echo 'División: ' . ( $numero1 / $numero2 ) . '<br/>';
echo 'Resto: ' . ( $numero1 % $numero2 ) . '<br/>';

// Operadores de incremento y decremento
$year = 2021;

// Incremento
// $year = $year + 1 ;
$year++;

// Decremento
// $year = $year - 1 ;
$year--;

// Preincremento
// $year = 1 + $year;
++$year;

// Predecremento
// $year = 1 - $year;
--$year;

echo "<h1>$year</h1>";

// Operadores de asignación
$edad = 21;

echo $edad . '<br/>';
// Incremento
echo ($edad+=5);
// decremento
echo ($edad-=5);
// Multiplicacion
echo ($edad*=5);
// División
echo ($edad/=5);
// Modulo
echo ($edad%=5);

?>