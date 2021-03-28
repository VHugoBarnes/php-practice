<?php

class Coche {

    // Atributos
    public $color;
    protected $marca;
    private $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        $this -> color = $color;
        $this -> marca = $marca;
        $this -> modelo = $modelo;
        $this -> velocidad = $velocidad;
        $this -> caballaje = $caballaje;
        $this -> plazas = $plazas;
    }

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

    public function mostrarInformacion(Coche $miObjeto) {
        $informacion = "<h1>Información del coche</h1>";
        $informacion .= "<p>Color del coche: " . $miObjeto -> color . "</p>";
        $informacion .= "<p>Marca del coche: " . $miObjeto -> marca . "</p>";
        $informacion .= "<p>Modelo del coche: " . $miObjeto -> modelo . "</p>";
        $informacion .= "<p>Velocidad del coche: " . $miObjeto -> velocidad . "</p>";
        $informacion .= "<p>Caballaje del coche: " . $miObjeto -> caballaje . "</p>";
        $informacion .= "<p>Plazas del coche: " . $miObjeto -> plazas . "</p>";

        return $informacion;
    }

}
