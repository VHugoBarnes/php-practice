<?php

// Traits
trait Utilidades {

    public function mostrarNombre() {
        echo "<h1>El nombre es: " . $this -> nombre ."</h1>";
    }

}

class Coche {

    public $nombre;
    public $marca;

    use Utilidades;

}

class Persona {

    public $nombre;
    public $apellidos;

    use Utilidades;

}

class VideoJuego {

    public $nombre;
    public $anio;

    use Utilidades;

}

$coche = new Coche();
$coche -> nombre = 'Tesla Model X';

$persona = new Persona();
$persona -> nombre = 'Keko';

$videojuego = new VideoJuego();
$videojuego -> nombre = 'Minecraft';

echo "<pre> " , var_export($coche) , " </pre>";
echo "<pre> " , var_export($persona) , " </pre>";
echo "<pre> " , var_export($videojuego) , " </pre>";
echo "<pre> " , $coche -> mostrarNombre() , " </pre>";
echo "<pre> " , $persona -> mostrarNombre() , " </pre>";
echo "<pre> " , $videojuego -> mostrarNombre() , " </pre>";
die();
