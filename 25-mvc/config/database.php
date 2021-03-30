<?php

class Database {

    public static function conectar() {
        $conexion = new mysqli("localhost", "root", "erinhannon21", "notas_master");
        $conexion -> query("SET NAMES 'utf-8'");

        return $conexion;
    }

}
