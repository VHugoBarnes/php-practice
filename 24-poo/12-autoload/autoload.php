<?php

function autocargar_clases($class) { 
    $class_rep = str_replace('\\', '/', $class);
    // echo $class_rep;
    // die();
    require_once 'clases/' . $class_rep . '.php';
}

spl_autoload_register('autocargar_clases');
