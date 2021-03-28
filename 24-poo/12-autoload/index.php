<?php

require_once 'autoload.php';

// Espacios de nombres y paquetes

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal {

    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct() {

        $this -> usuario = new Usuario();
        $this -> categoria = new Categoria();
        $this -> entrada = new Entrada();
        
    }

}
// Objeto principal
$principal = new Principal();
echo "<pre> " , var_export($principal -> usuario) , " </pre>";

// Objeto nuevo
$admin = new UsuarioAdmin();
echo "<pre> " , var_export($admin -> nombre) , " </pre>";

die();
