<?php

class NotaController {

    public function listar() {
        // Modelo
        require_once 'models/Nota.php';

        // Lógica acción del controlador
        $nota = new Nota();
        $notas = $nota->conseguirTodos('notas');

        // Vista
        require_once 'views/nota/listar.php';
    }

    public function crear() {

        // Modelo
        require_once 'models/Nota.php';

        // Controlador
        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("Descripción de mi nota");
        $nota->guardar();

        // Vista
        header("Location: index.php?controller=Nota&action=listar");

    }

    public function borrar() {

    }

}
