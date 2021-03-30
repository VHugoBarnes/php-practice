<?php
require_once 'coche.php';

$coche = new Coche("Negro", "Tesla", "Model S", 1000, 1000, 8);
echo $coche -> mostrarInformacion($coche);

// echo "<pre> " , var_export($coche) , " </pre>";
// die();
