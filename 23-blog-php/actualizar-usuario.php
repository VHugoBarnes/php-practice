<?php

if( isset($_POST) ) {

    // Conexión a la base de datos
    require_once 'includes/conexion.php';

    // Recoger los valores del formulario de registro
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, trim($_POST['nombre'])) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, trim($_POST['apellidos'])) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

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

    $guardar_usuario = false;
    if( count($errores) == 0 ) {
        $usuario = $_SESSION['usuario'];
        $guardar_usuario = true;

        // Comprobar si el email ya existe
        $sql = "SELECT id, email from usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);

        if( $isset_user['id'] == $usuario['id'] || empty($isset_user) ){
            // Actualizar usuario en la base de datos
            $sql = "UPDATE usuarios SET ".
                   "nombre = '$nombre', ".
                   "apellidos = '$apellidos', ".
                   "email = '$email' ".
                   "WHERE id = " . $usuario['id'];
            $guardar = mysqli_query($db, $sql);
    
            if( $guardar ) {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
    
                $_SESSION['completado'] = "Tus datos se han actualizado con éxito";
            } else {
                $_SESSION['errores']['general'] = "Fallo al actualizar tus datos";
            }
        } else {
            $_SESSION['errores']['general'] = "El usuario ya existe";
        }

    } else {
        $_SESSION['errores'] = $errores;
    }

}

header('Location: mis-datos.php');
