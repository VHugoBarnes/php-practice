<?php

interface Ordenador {
    
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();

}

class iMac implements Ordenador{

    private $modelo;

    public function getModelo() {
        return $this -> modelo;
    }

    public function setModelo($modelo) {
        $this -> modelo = $modelo;
    }

    public function encender() {
        
    }

    public function apagar() {
        
    }

    public function reiniciar() {
        
    }

    public function desfragmentar() {
        
    }

    public function detectarUSB() {
        
    }

}

$macintosh = new iMac();
$macintosh -> setModelo('Macintosh 3');
echo "<pre> " , var_export($macintosh -> getModelo()) , " </pre>";
die();
