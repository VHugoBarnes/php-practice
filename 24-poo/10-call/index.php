<?php

class Persona {

    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad) {
        
        $this -> nombre = $nombre;
        $this -> edad = $edad;
        $this -> ciudad = $ciudad;

    }

    public function __call($name, $arguments) {
        $prefix_method = substr($name, 0, 3);

        if( $prefix_method == 'get' ) {
            
            $nombre_metodo = substr(strtolower($name), 3);

            if( !isset($this->$nombre_metodo) ) {
                return 'El método no existe';
            }

            return $this -> $nombre_metodo;

        } else {
            return 'El método no existe';
        }

    }

}

$persona = new Persona("Victor", 21, "Matamoros");
echo "<pre> " , $persona -> getNombre() , " </pre>";
echo "<pre> " , $persona -> getEdad() , " </pre>";
echo "<pre> " , $persona -> getCiudad() , " </pre>";
echo "<pre> " , $persona -> Keko() , " </pre>";
die();