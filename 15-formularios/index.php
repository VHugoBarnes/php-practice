<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"> <br>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido"> <br>
        
        <label for="button">Button</label>
        <input type="button" name="button" value="clikeame"><br>
        
        <label for="sexo">Sexo</label>
        <p>
            Hombre: <input type="checkbox" name="sexo" value="hombre"/>
            Mujer: <input type="checkbox" name="sexo" value="mujer"/>
        </p>
        
        <label for="color">Color</label>
        <input type="color" name="color" value=""><br>
        
        <label for="fecha">fecha</label>
        <input type="date" name="fecha" value=""><br>
        
        <label for="correo">correo</label>
        <input type="email" name="correo" value=""><br>
        
        <label for="archivo">archivo</label>
        <input type="file" name="archivo" value=""><br>
        
        <label for="number">number</label>
        <input type="number" name="number" value=""><br>
        
        <label for="password">password</label>
        <input type="password" name="password" value=""><br>
        
        <br>
        <label for="radiobutton">radiobutton</label> <br>
        America<input type="radio" name="radiobutton" value="America"><br>
        Europa<input type="radio" name="radiobutton" value="Europa"><br>
        Asia<input type="radio" name="radiobutton" value="Asia"><br>


        <label for="url">url</label>
        <input type="url" name="url" value=""><br>

        <textarea name="area" id="1" cols="30" rows="10"></textarea>


        <p>Peliculas:</p>
        <select name="select" id="2">
            <option value="">La la land</option>
            <option value="">Super</option>
            <option value="">Metalhead</option>
            <option value="">Avengers</option>
            <option value="">Spiderman</option>
        </select>

        <input type="submit" value="enviar">
        
    </form>
</body>
</html>

<?php

/**
 * 
 */

?>