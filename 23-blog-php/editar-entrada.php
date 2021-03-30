<!-- Redirección -->
<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
        $entrada_actual = conseguirEntrada($db, $_GET['id']);
        if( !isset($entrada_actual['id']) ) {
            header("Location: index.php");
        }
?>
<?php require_once 'includes/cabecera.php'; ?>
<!-- Barra lateral -->
<?php require_once 'includes/lateral.php' ?>

<!-- Caja principal -->
<div id="principal">

    <h1>Editar entrada</h1>

    <p>
        Edita tu entrada: <?=$entrada_actual['titulo']?>
    </p>

    <br>

    <form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="" value="<?=$entrada_actual['titulo']?>">
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="" cols="80" rows="10" ><?=$entrada_actual['descripcion']?></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>

        <label for="categoria">Categoría</label>
        <select name="categoria" id="">
            <?php 
                $categorias = conseguirCategorias($db);
                if( !empty($categorias) ):
                while($categoria = mysqli_fetch_assoc($categorias)):
            ?>

                    <option value="<?= $categoria['id'] ?>"
                        <?= ($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : '' ?>
                    >
                        <?= $categoria['nombre'] ?>
                    </option>

            <?php 
                endwhile;
                endif; 
            ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>

        <input type="submit" value="Actualizar">
    </form>

    <?php borrarError(); ?>

</div>
<?php require_once 'includes/pie.php' ?>