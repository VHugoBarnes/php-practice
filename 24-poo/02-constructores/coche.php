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

}
