<?php

// // Abrir fichero
// $archivo = fopen('fichero_texto.txt', 'a+');

// // Leer archivo
// while(!feof($archivo)) {
//     $contenido = fgets($archivo);
//     echo $contenido . "<br>";
// }

// // Escribir en archivo
// fwrite($archivo, 'Soy un texto metido desde PHP');

// // Cerrar archivo
// fclose($archivo); 

// Copiar fichero
// copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

// Renonmbar un fichero
// rename('fichero_copiado.txt', 'archivo.md');

// Eliminar un fichero
// unlink('archivo.md') or die("Error al borrar");

// Comprobar si un archivo existe o no
if(file_exists('fichero_texto.txt')) {
    echo "<h1> <p>El archivo <pre>fichero_texto.txt</pre> existe</p> </h1>";
} else {
    echo "<h1> <p>El archivo <pre>fichero_texto.txt</pre> <strong>NO</strong> existe</p> </h1>";
}

if(file_exists('archivo.md')) {
    echo "<h1> <p>El archivo <pre>archivo.md</pre> existe</p> </h1>";
} else {
    echo "<h1> <p>El archivo <pre>archivo.md</pre> <strong>NO</strong> existe</p> </h1>";
}

?>