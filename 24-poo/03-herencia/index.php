<?php
require_once 'clases.php';

$victor = new Persona("Víctor", "Vázquez", 172, 21);
$victorProgramador = new Informatico("Víctor", "Vázquez", 172, 21);
$victorAdminRedes = new TecnicoRedes("Víctor", "Vázquez", 172, 21);

echo "<pre> " , var_export($victor) , " </pre>";
echo "<pre> " , var_export($victorProgramador) , " </pre>";
echo "<p>Sabe: ". $victorProgramador -> sabeLenguajes('HTML, CSS, PHP, Javascript') ."</p>";
echo "<p>". $victorAdminRedes -> auditoria() ."</p>";
die();
