<h1>Crear nuevo producto</h1>

<div class="form_container">

    <form action="<?= base_url ?>producto/save" method="POST" enctype="multipart/form-data">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion"></textarea>

        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio" required>

        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" required min="0">

        <label for="categoria">Categoria</label>
        <?php $categorias = Utils::showCategorias(); ?>
        <select name="categoria" id="categoria">
            <?php while ($categoria = $categorias->fetch_object()) : ?>
                <option value="<?= $categoria->id ?>">
                    <?= $categoria->nombre ?>
                </option>
            <?php endwhile; ?>
        </select>

        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" id="imagen" required>

        <input type="submit" value="Guardar">

    </form>

</div>