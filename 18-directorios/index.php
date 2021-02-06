<?php

// Crear directorios
if( is_dir('mi_carpeta')) {
    mkdir('mi_carpeta', 0777, umask(0)) or die('No se puede crear la carpeta');
} else {
    echo "<h1>Ya existe la carpeta</h1>";
}

// rmdir('mi_carpeta');

if($gestor = opendir('./mi_carpeta')) {
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..') {
            echo $archivo;
        }
    }
}
