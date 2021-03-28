<?php

namespace PanelAdministrador;

class Usuario {

    public $nombre;
    public $email;


    public function __construct() {
        $this -> nombre = 'Keko';
        $this -> email = 'keko@gmail.com';
    }

}
