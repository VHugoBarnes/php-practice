<h1>Registrarse</h1>
<form action="index.php?controller=Usuario&action=save" method="post">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" required>

    <label for="email">email</label>
    <input type="text" name="email" id="email" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Registrarse">
    
</form>