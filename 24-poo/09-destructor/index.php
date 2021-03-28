<?php

class Usuario {

    public $nombre;
    public $email;

    public function __construct() {
        
        echo "<pre>Instancia del objeto creada</pre>";

    }

    public function __destruct() {
        echo "<pre>Destruyendo objeto</pre>";
    }

}

$usuario = new Usuario();

for ($i=0; $i <= 200; $i++) { 
    echo $i . "<br>";
}
