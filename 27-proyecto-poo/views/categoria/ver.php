<?php if (isset($categoria)) : ?>
    <h1><?= $categoria->nombre ?></h1>
    <?php if ($productos->num_rows == 0) : ?>
        <h1>Aún no hay productos en esta categoría</h1>
    <?php else : ?>
        <?php while ($producto = $productos->fetch_object()) : ?>
            <div class="product">
                <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>">
                    <img src="<?= $producto->imagen ? base_url . 'uploads/images/' . $producto->imagen : base_url . 'assets/img/camiseta.png' ?>" alt="Producto">
                    <h2><?= $producto->nombre ?></h2>
                </a>
                <p><?= $productos->precio ?></p>
                <a href="#" class="button">Comprar</a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php else : ?>
    <h1>La categoria no existe</h1>
<?php endif; ?>