<aside id="barraLateral">
    <!-- LOGIN -->
    <div id="inicioSesion" class="block-aside">
        <h3>Identifícate</h3>
        <form action="inicioSesion.php" method="POST">
            <label for="correo">e-mail</label>
            <input type="email" name="correo">

            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena">

            <input type="submit" value="Entrar">
        </form>
    </div>
    <!-- REGISTER -->
    <div id="registro" class="block-aside">
        <h3>Regístrate</h3>
        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">

            <label for="correo">e-mail</label>
            <input type="email" name="correo">

            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena">

            <input type="submit" value="Registrarse">
        </form>
    </div>
</aside>