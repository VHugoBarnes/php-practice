<h1>Bienvenido a mi web con MVC</h1>
<?php

require_once 'controllers/usuario.php';

if( isset($_GET['controller']) && class_exists($_GET['controller']) ) {
    $nombreControlador = $_GET['controller'];
    $controlador = new $nombreControlador();

    if( isset($_GET['action']) && method_exists($controlador, $_GET['action']) ) {
        $action = $_GET['action'];
    
        $controlador -> $action();
    } else {
        echo "<pre>La página que buscas no existe</pre>";
    }

} else {
    echo "<pre>La página que buscas no existe</pre>";
}
