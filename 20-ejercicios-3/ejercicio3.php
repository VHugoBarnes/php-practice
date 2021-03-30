<?php

$resultado = false;

if(isset($_POST['n1']) && isset($_POST['n2'])) {

    if(isset($_POST['sumar'])) {
        $resultado = "El resultado es: ".($_POST['n1'] + $_POST['n2']);
    } elseif(isset($_POST['restar'])) {
        $resultado = "El resultado es: ".($_POST['n1'] - $_POST['n2']);
    } elseif(isset($_POST['multiplicar'])) {
        $resultado = "El resultado es: ".($_POST['n1'] * $_POST['n2']);
    } elseif(isset($_POST['dividir'])) {
        $resultado = "El resultado es: ".($_POST['n1'] / $_POST['n2']);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
<!-- /**
 * Ejercicio 3. Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones 
 * uno para sumar, restar, dividir y multiplicar
 */ -->
    <form action="" method="POST">
        <input type="number" name="n1" id="">
        <input type="number" name="n2" id="">

        <!-- Botones -->
        <input type="submit" value="sumar" name="sumar">
        <input type="submit" value="restar" name="restar">
        <input type="submit" value="multiplicar" name="multiplicar">
        <input type="submit" value="dividir" name="dividir">

    </form>

    <?php

        if($resultado != false) {
            echo "<h1>$resultado</h1>";
        } else {
            echo "<h1>AAAAAAAAAA</h1>";
        }

    ?>
</body>
</html>