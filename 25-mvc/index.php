<h1>Bienvenido a mi web con MVC</h1>
<?php

require_once 'controllers/usuario.php';
require_once 'controllers/nota.php';

if( isset($_GET['controller']) && class_exists($_GET['controller'].'Controller') ) {
    $nombreControlador = $_GET['controller'].'Controller';
    $controlador = new $nombreControlador();

    if( isset($_GET['action']) && method_exists($controlador, $_GET['action']) ) {
        $action = $_GET['action'];
    
        $controlador -> $action();
    } else {
        echo "<pre>La página que buscas no existe</pre>";
    }

} else {
    echo "<pre>El controlador que buscas no existe</pre>";
}
