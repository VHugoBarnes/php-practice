<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
    <h1>Tu pedido se ha confirmado</h1>
    <p>Tu pedido ha sido guardado con éxito.</p>
    <br>
    <?php if (isset($pedido)) : ?>
        <h3>Datos del pedido:</h3>
        <p>Número de pedido: <?=$pedido->id?></p>
        <p>Total a pagar: <?=$pedido->coste?></p>
        <p>Productos:</p>
        <?php while($producto = $productos->fetch_object()):?>
            <ul>
                <li><?=$producto->nombre?> - <?=$producto->precio?> (<?=$producto->unidades?>)</li>
            </ul>
        <?php endwhile;?>
    <?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'failed') : ?>
    <h1>Error de confirmación</h1>
    <p>Tu pedido no ha sido guardado.</p>
<?php endif; ?>