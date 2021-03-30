<?php

if( !isset($_SESSION) ) {
    session_start();
}

// Comprobar si existe un usuario en sesión
if( !isset($_SESSION['usuario']) ) {
    header("Location: index.php");
}
