<?php

require_once 'models/Categoria.php';
require_once 'models/Producto.php';

class categoriaController {

    public function index() {
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once 'views/categoria/index.php';
    }

    public function ver() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();

            $productos = new Producto();
            $productos->setCategoria_id($id);
            $productos = $productos->getByCategory();

        }

        require_once 'views/categoria/ver.php';
    }

    public function crear() {
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';

    }

    public function save() {
        Utils::isAdmin();

        if( isset($_POST) && isset($_POST['nombre']) ) {
            // Guardar la categoria
            $categoria = new Categoria();
            $categoria->setNombre($_POST['nombre']);
            $categoria->save();
        }

        header("Location: ".base_url."categoria/index");
    }

}
