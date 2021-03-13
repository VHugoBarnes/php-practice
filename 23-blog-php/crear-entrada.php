<!-- Redirección -->
<?php require_once 'includes/redireccion.php' ?>
<!-- Cabecera -->
<?php require_once 'includes/cabecera.php'; ?>
<!-- Barra lateral -->
<?php require_once 'includes/lateral.php' ?>

<!-- Caja principal -->
<div id="principal">

    <h1>Crear entradas</h1>

    <p>
    Añade nuevas entradas al blog para que los usuarios puedan 
    leerlas y disfrutar de nuestro contenido.
    </p>

    <br>

    <form action="guardar-entrada.php" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="">

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="" cols="80" rows="10"></textarea>

        <label for="categoria">Categoría</label>
        <select name="categoria" id="">
            <?php 
                $categorias = conseguirCategorias($db);
                if( !empty($categorias) ):
                while($categoria = mysqli_fetch_assoc($categorias)):
            ?>

                    <option value="<?= $categoria['id'] ?>">
                        <?= $categoria['nombre'] ?>
                    </option>

            <?php 
                endwhile;
                endif; 
            ?>
        </select>

        <input type="submit" value="Guardar">
    </form>

</div> <!-- Fin caja principal -->
<?php require_once 'includes/pie.php' ?>
