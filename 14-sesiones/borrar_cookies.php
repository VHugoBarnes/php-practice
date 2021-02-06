<?php

// Borrar una cookie
if(isset($_COOKIE['micookie']) || isset($_COOKIE['ayear'])) {
    unset($_COOKIE['micookie']);
    setcookie('micookie', '', time()-100); // Caduca la cookie

    unset($_COOKIE['ayear']);
    setcookie('ayear', '', time()-100); // Caduca la cookie

    echo "<h1>Cookie eliminada</h1>";
} else {
    echo "<h1>La cookie no existe, por lo tanto no se va a borrar</h1>";
}

header('Location:ver_cookies.php');

?>