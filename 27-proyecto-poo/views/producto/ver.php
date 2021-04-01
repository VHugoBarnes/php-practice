<?php if (isset($pro)) : ?>
    <h1><?= $pro->nombre ?></h1>

    <img src="<?= $pro->imagen ? base_url . 'uploads/images/' . $pro->imagen : base_url . 'assets/img/camiseta.png' ?>" alt="Producto" class="">
    <p><?=$pro->descripcion?></p>
    <p><?=$pro->precio?></p>
    <a href="" class="button">Comprar</a>

<?php else : ?>
    <h1>El producto no existe</h1>
<?php endif; ?>