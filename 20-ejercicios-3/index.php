<?php

/**
 * Ejercicio 1. Crear una sesión que aumente su valor en uno o disminuya en uno 
 * en función de si el parametro get counter está en uno o cero.
 */

echo "<h1>Ejercicio 1</h1>";
echo "<hr>";
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
echo "<hr>";

/**
 * Ejercicio 2. 
 * 1. Una función
 * 2. Validar un email con filter_val
 * 3. Recoger variable por get y validarla
 * 4. Mostrar un resultado
 */

echo "<h1>Ejercicio 2</h1>";
echo "<hr>";

// Crear función
function validarEmail($email) {
    // Validar un email con filter_val
    if( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {

        echo "$email es un email correcto";

    } else {
        echo "No valido";
    }
    
}

if(isset($_GET['email'])) {
    
    validarEmail($_GET['email']);
} else {
    echo "<h1>Pasa un email por parámetros</h1>";
}


?>