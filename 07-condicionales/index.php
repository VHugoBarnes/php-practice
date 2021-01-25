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

?>