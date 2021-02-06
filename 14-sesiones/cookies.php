<?php

/**
 * Cookies. Es un fichero que se almacena en el ordenador del usuario que visita
 * la web, con el fin de recordar datos o rastrear cierta información o comportamiento del
 * mismo en la web.
 */

// Crear cookie
// setcookie("nombre", "Valor que solo puede ser texto", caducidad, ruta, dominio);

// Cookie básica
setcookie("micookie", "Valor de mi galleta");

// Cookie con expiración
setcookie("ayear", "Valor de mi cookie de 365 dias", time()+(60*60*24*365));

header('Location:ver_cookies.php');
?>

