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
        $borrado = true;
    }
    
    if( isset($_SESSION['errores_entrada']) ) {
        $_SESSION['errores_entrada'] = null;
        // $borrado = session_unset($_SESSION['errores_entrada']);
        $borrado = true;
    }

    if( isset($_SESSION['completado']) ) {
        $_SESSION['completado'] = null;
        $borrado = true;
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

function conseguirEntradas($conexion, $limit = null) {

    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e " . 
           "INNER JOIN categorias c ON e.categoria_id = c.id ".
           "ORDER BY e.id DESC";

    if($limit) {
        $sql .= " LIMIT 4";
    }

    $entradas = mysqli_query($conexion, $sql);

    $resultado_query = array();

    // Comprobar si devuelve los resultados
    if( $entradas && mysqli_num_rows($entradas) >= 1 ) {
        $resultado_query = $entradas;
    }

    return $resultado_query;

}
