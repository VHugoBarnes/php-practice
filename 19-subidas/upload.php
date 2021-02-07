<?php

// Accedemos al archivo enviado en el frontend.
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/png" || $tipo == "image/jpeg" || $tipo == "image/jpg") {
    
    // Comprobar que existe el directorio de subida de archivos
    if(!is_dir('images')) {
        mkdir('images', 0777, true);
    }

    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

    header("Refresh: 3; URL=index.php");
    echo "<h1>Imagen subida correctamente</h1>";

} else {
    
    header("Refresh: 3; URL=index.php");
    echo "<h1>Sube una imagen con el formato correcto por favor</h1>";

}

?>