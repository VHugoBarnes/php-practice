<?php if (isset($_SESSION['identity'])) : ?>
    <h1>Continúa con tu pedido</h1>
    <p><a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a></p>
    <br>
    <h3>Ingresa tus datos</h3>
    <form action="<?=base_url?>pedido/add" method="POST">

        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" id="" required>

        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" id="" required>

        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="" required>

        <input type="submit" value="Confirmar pedido" class="button">

    </form>

<?php else : ?>
    <h1>Inicia sesión para seguir con tu compra</h1>
<?php endif; ?>