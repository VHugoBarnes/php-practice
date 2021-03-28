<?php

// Herencia

class Persona {

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function __construct($nombre, $apellidos, $altura, $edad) {

        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> altura = $altura;
        $this -> edad = $edad;

    }

    public function getNombre() {
        return $this -> nombre;
    }

    public function setNombre($nombre) {
        $this -> nombre = $nombre;
    }

    public function getApellidos() {
        return $this -> apellidos;
    }

    public function setApellidos($apellidos) {
        $this -> apellidos = $apellidos;
    }

    public function getAltura() {
        return $this -> altura;
    }

    public function setAltura($altura) {
        $this -> altura = $altura;
    }

    public function getEdad() {
        return $this -> edad;
    }

    public function setEdad($edad) {
        $this -> edad = $edad;
    }

    public function hablar() {
        return "Estoy hablando";
    }

    public function caminar() {
        return "Estoy caminando";
    }

}

class Informatico extends Persona {

    public $lenguajes;
    public $experienciaProgramando;

    public function sabeLenguajes($lenguajes) {
        $this -> lenguajes = $lenguajes;

        return $this -> lenguajes;
    }

    public function programar() {
        return "Soy programador";
    }

    public function repararOrdenador() {
        return "Reparar ordenadores";
    }

    public function hacerOfimatica() {
        return "Estoy escribiendo en word";
    }

}

class TecnicoRedes extends Informatico{

    public $auditarRedes;
    public $experienciaRedes;

    public function auditoria() {
        return "Estoy auditando la red";
    }

}
