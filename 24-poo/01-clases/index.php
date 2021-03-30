<?php

class Coche {

    // Atributos
    public $color = 'Rojo';
    public $marca = 'Tesla';
    public $modelo = 'Y';
    public $velocidad = 400;
    public $caballaje = '1000';
    public $plazas = '2';

    // Métodos
    public function getColor() {
        return $this -> color;
    }

    public function setColor($c) {
        $this -> color = $c;
    }

    public function acelerar() {
        $this ->  velocidad++;
    }

    public function frenar() {
        $this -> velocidad--;
    }

    public function getVelocidad() {
        return $this -> velocidad;
    }

    public function setModelo($modelo) {
        $this -> modelo = $modelo;
    }

    public function getModelo() {
        return $this -> modelo;
    }

}

// Crear objeto
$coche = new Coche();
// echo "<pre> " , var_export($coche) , " </pre>";

// Usar los métodos
echo $coche -> getVelocidad();
$coche -> setColor('Amarillo');
echo $coche -> getColor();
echo "<br>";

$coche -> acelerar();
$coche -> acelerar();
$coche -> acelerar();
$coche -> acelerar();

echo "La velocidad del coche es: " . $coche -> getVelocidad() . "<br>";
