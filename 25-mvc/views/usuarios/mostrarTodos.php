<h1>Listado de usuarios</h1>
<?php while($usuario = $todosLosUsuarios->fetch_object()): ?>

    <p><?= $usuario -> email ?> - <?= $usuario -> fecha ?></p>

<?php endwhile; ?>