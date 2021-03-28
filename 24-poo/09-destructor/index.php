<?php

class Usuario {

    public $nombre;
    public $email;

    public function __construct() {

        $this -> nombre = 'Víctor Vázquez';
        $this -> email = 'hugo@vazquez.com';
        
        echo "<pre>Instancia del objeto creada</pre>";

    }

    public function __toString() {
        return "Hola, {$this -> nombre}, estás registrado con: {$this -> email}";
    }

    public function __destruct() {
        echo "<pre>Destruyendo objeto</pre>";
    }

}

$usuario = new Usuario();
echo "<pre>". $usuario -> nombre ."</pre>";
echo "<pre>". $usuario ."</pre>";

// for ($i=0; $i <= 200; $i++) { 
//     echo $i . "<br>";
// }
