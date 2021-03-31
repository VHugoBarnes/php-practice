<h1>Registrarse</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete' ): ?>
    <strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
    <strong class="alert_red">Error al registrarte, introduce bien los datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>

<form action="<?=base_url?>usuario/save" method="POST">
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