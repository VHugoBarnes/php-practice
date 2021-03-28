<?php

function autocargar_clases($class) {
    $clase = strtolower($class);
    require_once 'clases/' . $clase . '.php';
}

spl_autoload_register('autocargar_clases');
