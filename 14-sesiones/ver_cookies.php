<?php

/**
 * Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una
 * variable superglobal, es un array asociativo.
 */

if(isset($_COOKIE['micookie'])) {
    echo "<h1>" . $_COOKIE['micookie'] ."</h1>";
} else {
    echo "<p>No existe la cookie</p>";
}

if(isset($_COOKIE['ayear'])) {
    echo "<h1>". $_COOKIE['ayear'] ."</h1>";
} else {
    echo "<p>No existe la cookie</p>";
}

?>

<a href="cookies.php">Crear cookies</a>
<br>
<a href="borrar_cookies.php">Borrar cookies</a>