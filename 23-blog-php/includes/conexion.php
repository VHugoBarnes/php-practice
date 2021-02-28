<?php

// Conexión
$servidor = 'localhost';
$usuario = 'root';
$contrasena = 'erinhannon21';
$basedatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
session_start();
