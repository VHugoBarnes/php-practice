<?php

class pedidoController {

    public function hacer() {
        require_once 'views/pedido/hacer.php';
    }

    public function add() {

            echo "<pre> " , var_export($_POST) , " </pre>";
            die();

    }

}
