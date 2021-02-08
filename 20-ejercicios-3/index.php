<?php

/**
 * Ejercicio 1. Crear una sesión que aumente su valor en uno o disminuya en uno 
 * en función de si el parametro get counter está en uno o cero.
 */

// Iniciar sesión
session_start();

// Verificar que el parámetro get exista
if(isset($_GET['counter'])) {
    
    // Verificar que sea un numero
    if(is_numeric($_GET['counter'])) {
        $counter = $_GET['counter'];

        // Verificar que sea 1 o 0
        if($_GET['counter'] == 1) {
            // Variable de sesión
            $_SESSION['variable'] = 5 + 1;
            echo "<h1>El valor es: ".$_SESSION['variable']." </h1>";
        } elseif($_GET['counter'] == 0) {
            $_SESSION['variable'] = 5 - 1;
            echo "<h1>El valor es: ".$_SESSION['variable']." </h1>";
        } else {
            echo "<h1>No se realizó ninguna operación</h1>";
        }

    } else {
        echo "<h1>El valor en el get no es un número</h1>";
    }

} else {
    echo "<h1>No se encontró ningún valor en los parámetros GET</h1>";
}

?>