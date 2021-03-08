<?php

function mostrarError($errores, $campo) {

    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)) {
        $alerta = 
        "<div class='alerta alerta-error'>".
            $errores[$campo]
        ."</div>";
    } 

    return $alerta;
}

function borrarError() {

    $borrado = false;
    
    if( isset($_SESSION['errores']) ) {
        $_SESSION['errores'] = null;
        $borrado = session_unset($_SESSION['errores']);
    }
    
    if( isset($_SESSION['completado']) ) {
        $_SESSION['completado'] = null;
        session_unset($_SESSION['completado']);
    }
    return $borrado;
}

function conseguirCategorias($conexion) {

    // Query
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";

    //Ejecución del query
    $categorias = mysqli_query($conexion, $sql);
    $resultado_query = array();

    // Comprobar si devuelve resultados
    if($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado_query = $categorias;
    }

    return $resultado_query;

}
