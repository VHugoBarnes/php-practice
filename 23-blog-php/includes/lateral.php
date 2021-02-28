<aside id="barraLateral">
    <!-- LOGIN -->
    <div id="inicioSesion" class="block-aside">
        <h3>Identifícate</h3>
        <form action="inicioSesion.php" method="POST">
            <label for="email">e-mail</label>
            <input type="email" name="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

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

            <label for="email">e-mail</label>
            <input type="email" name="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

            <input type="submit" name="submit" value="Registrarse">
        </form>
    </div>
</aside>