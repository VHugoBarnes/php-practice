<?php

// Iniciar sesión
session_start();

// Esta variable no se va a mostrar
echo "$variable_normal<br>";
// Esta sí
echo $_SESSION['variable_persistente'] . "<br>";