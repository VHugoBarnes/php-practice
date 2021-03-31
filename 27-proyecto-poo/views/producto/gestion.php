<h1>Gestión de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">Crear producto</a>

<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>
    <?php while ($producto = $productos->fetch_object()) : ?>
        <tr>
            <td><?= $producto->id ?></td>
            <td><?= $producto->nombre ?></td>
            <td><?= $producto->precio ?></td>
            <td><?= $producto->stock ?></td>
        </tr>
    <?php endwhile; ?>
</table>