<?php

try {

    if( isset($_GET['id']) ) {
        echo "<h1>". $_GET['id'] ."</h1>";
    } else {
        throw new Exception('Faltan parametros por la URL');
    }

} catch(Exception $e) {
    echo "Ha habido un error: " . $e -> getMessage();
} finally {
    echo "<br>Todo correcto";
}
