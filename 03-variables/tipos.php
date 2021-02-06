<?php

/* Tipos de datos en PHP 
 * 
 * Entero: int
 * Coma flotante: float, double
 * Cadenas de caracteres: string
 * booleano: bool
 * null
 * Array
 * Objetos
 * 
 */

$numero = 100;
$decimal = 23.1;
$texto = 'Soy un texto';
$verdadero = true;
$nula = null;
echo gettype($numero);
echo gettype($decimal);
echo gettype($texto);
echo gettype($verdadero);
echo gettype($nula);

// Debuggear
$mi_nombre = 'Víctor Hugo';
var_dump($mi_nombre);

// Template string como en javascript, pero en php
$template = "Mi nombre es $mi_nombre";
echo $template;


?>