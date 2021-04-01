<h1>Gestión de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">Crear producto</a>

<?php if( isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete' ): ?>
    <br><p><strong class="alert_green">Producto creado exitosamente</strong></p><br>
<?php elseif( isset($_SESSION['producto']) && $_SESSION['producto'] == 'failed' ): ?>
    <br><p><strong class="alert_red">Error al guardar el producto</strong></p><br>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>

<?php if( isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete' ): ?>
    <br><p><strong class="alert_green">Producto eliminado exitosamente</strong></p><br>
<?php elseif( isset($_SESSION['delete']) && $_SESSION['delete'] == 'failed' ): ?>
    <br><p><strong class="alert_red">Error al eliminar el producto</strong></p><br>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>

<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>
    <?php while ($producto = $productos->fetch_object()) : ?>
        <tr>
            <td><?= $producto->id ?></td>
            <td><?= $producto->nombre ?></td>
            <td><?= $producto->precio ?></td>
            <td><?= $producto->stock ?></td>
            <td>
                <a href="<?=base_url?>producto/editar&id=<?=$producto->id?>" class="button button-gestion button-editar">Editar</a>
                <a href="<?=base_url?>producto/eliminar&id=<?=$producto->id?>" class="button button-gestion button-red">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>