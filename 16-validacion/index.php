<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios</title>
</head>
<body>
    <h1>Validación de formularios en php</h1>

    <?php

        if(isset($_GET['error'])) {
            $error = $_GET['error'];
            if($error == 'faltan_valores') {
                echo "<strong style='color: red'>Introduce todos los datos en el formulario</strong>";
            }
        }

    ?>

    <form action="procesar_formulario.php" method="post">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+">
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" required pattern="[A-Za-z]+">
        </p>
        <p>
            <label for="edad">Edad</label>
            <input type="number" name="edad" required pattern="[0-9]+">
        </p>
        <p>
            <label for="email">E-Mail</label>
            <input type="email" name="email" >
        </p>
        <p>
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" required>
        </p>
        <p>
            <input type="submit" value="enviar">
        </p>
    </form>

</body>
</html>