<?php

// Abrir fichero
$archivo = fopen('fichero_texto.txt', 'a+');

// Leer archivo
while(!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido . "<br>";
}

// Escribir en archivo
fwrite($archivo, 'Soy un texto metido desde PHP');

// Cerrar archivo
fclose($archivo); 

?>