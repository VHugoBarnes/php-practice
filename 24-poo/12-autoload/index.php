<?php

require_once 'autoload.php';
// require_once 'clases/usuario.php';
// require_once 'clases/categoria.php';
// require_once 'clases/entrada.php';

$usuario = new Usuario();
echo $usuario -> nombre;

$categoria = new Categoria();
echo $categoria -> nombre;
