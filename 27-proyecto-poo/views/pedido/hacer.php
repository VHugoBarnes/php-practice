<?php if (isset($_SESSION['identity'])) : ?>
    <h1>Continúa con tu pedido</h1>
    <a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>

    <form action="">
        
    </form>

<?php else : ?>
    <h1>Inicia sesión para seguir con tu compra</h1>
<?php endif; ?>