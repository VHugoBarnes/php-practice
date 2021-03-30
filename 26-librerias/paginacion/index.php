<?php

require_once '../vendor/autoload.php';

// Conexión base de datos
$conexion = new mysqli("localhost", "root", "erinhannon21", "notas_master");
$conexion -> query("SET NAMES 'utf-8'");

// Consulta a paginar y para contar los elementos totales
$consulta = $conexion->query("SELECT * FROM notas");
$numeroElementos = $consulta->num_rows;
$numeroElementosPagina = 2;

// echo "<pre> " , var_export($numeroElementos) , " </pre>";

// Paginacion
$pagination = new Zebra_Pagination();

// Número total de elementos a paginar
$pagination->records($numeroElementos);

// Numero de elementos por página 
$pagination->records_per_page($numeroElementosPagina);

$page = $pagination->get_page();

$empiezaAqui = (($page - 1)*$numeroElementosPagina);
$sql = "SELECT * FROM notas LIMIT $empiezaAqui,$numeroElementosPagina";
$notas = $conexion->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while($nota = $notas->fetch_object()) {

    echo "<h1>{$nota->id}. {$nota->titulo}</h1>";
    echo "<h2>{$nota->descripcion}</h2>";

}

$pagination->render();
