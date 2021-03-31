<?php

session_start();

require_once 'autoload.php';
require_once 'config/db.php';

require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

function showError() {
    $error = new ErrorController();
    $error->index();
}

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
        // echo "<pre>La acción que buscas no existe</pre>";
        showError();
    }

} else if( !isset($_GET['controller']) && !isset($_GET['action']) ) {

        $nombreControlador = controllerDefualt;
        $controlador = new $nombreControlador();
        $action = actionDefualt;
        $controlador->$action();

}else {
    // echo "<pre>El controlador que buscas no existe</pre>";
    showError();
}

require_once 'views/layout/footer.php';
