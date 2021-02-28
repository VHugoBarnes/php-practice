<?php

session_start();

if( isset($_POST) ) {

    // Recoger los valores del formulario de registro
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    // Array de errores
    $errores = array();

    // Validar los datos antes de guardarlos en la base de datos

    /* NOMBRE */
    if( !empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) ) {
        $nombre_validado = true;
        echo "<pre>El nombre es válido</pre>";
    } else {
        echo "<pre style='color:red'>El nombre NO es válido</pre>";
        $errores['nombre'] = "El nombre NO es válido";
        $nombre_validado = false;
    }
    
    /* APELLIDOS */
    if( !empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos) ) {
        $apellido_validado = true;
        echo "<pre>El apellido es válido</pre>";
    } else {
        echo "<pre style='color:red'>El apellido NO es válido</pre>";
        $errores['apellidos'] = "El apellido NO es válido";
        $apellido_validado = false;
    }

    /* CORREO */
    if( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $email_validado = true;
        echo "<pre>El email es válido</pre>";
    } else {
        echo "<pre style='color:red'>El email NO es válido</pre>";
        $errores['email'] = "El email NO es válido";
        $email_validado = false;
    }

    /* CONTRASEÑA */
    if( !empty($password) ) {
        $password_validado = true;
        echo "<pre>El password es válido</pre>";
    } else {
        echo "<pre style='color:red'>El password NO es válido</pre>";
        $errores['password'] = "El password NO es válido";
        $password_validado = false;
    }

    $guardar_usuario = false;
    if( count($errores) == 0 ) {
        $guardar_usuario = true;
        // Insertar usuario en la base de datos

    } else {
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }

}
