<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <form action="recibir.php" method="POST">
        <p><label for="nombre">Nombre</label>
        <input type="text" name="nombre"></p>
        <p><label for="apellidos">Apellido</label>
        <input type="text" name="apellido"></p>
        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>