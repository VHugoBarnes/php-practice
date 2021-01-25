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

?>