<h1>Bienvenido a mi web con MVC</h1>
<?php

require_once 'autoload.php';

// Si viene por parametro y si existe la clase
if( isset($_GET['controller']) && class_exists($_GET['controller'].'Controller') ) {

    // Almacenamos el nombre de la clase de un controlador en una variable para ejecutarla
    $nombreControlador = $_GET['controller'].'Controller';
    $controlador = new $nombreControlador();

    // Si la acción viene por param y si existe el método del controlador.
    if( isset($_GET['action']) && method_exists($controlador, $_GET['action']) ) {
        
        // Ejecuta el método del controlador
        $action = $_GET['action'];
        $controlador -> $action();

    } else {
        echo "<pre>La acción que buscas no existe</pre>";
    }

} else {
    echo "<pre>El controlador que buscas no existe</pre>";
}
