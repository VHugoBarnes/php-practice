<?php

require_once 'configuracion.php';

Configuracion::setColor('blue');
Configuracion::setEntorno('localhost');
Configuracion::setNewsletter(true);

echo Configuracion::getColor() . "<br>";
echo Configuracion::getEntorno() . "<br>";
echo Configuracion::getNewsletter() . "<br>";

$configuracion = new Configuracion();
$configuracion::$color = "red";
echo $configuracion::$color . "<br>";
echo "<pre> " , var_export($configuracion) , " </pre>";
