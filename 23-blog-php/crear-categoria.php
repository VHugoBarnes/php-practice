<!-- Redirección -->
<?php require_once 'includes/redireccion.php' ?>
<!-- Cabecera -->
<?php require_once 'includes/cabecera.php'; ?>
<!-- Barra lateral -->
<?php require_once 'includes/lateral.php' ?>

<!-- Caja principal -->
<div id="principal">

    <h1>Crear categorias</h1>

    <p>
    Añade nuevas categorías al blog para que 
    nuevos usuarios puedan usarlas a crear sus entradas.
    </p>

    <br>

    <form action="guardar-categoria.php" method="post">
        <label for="nombre">Nombre de la categoría:</label>
        <input type="text" name="nombre" id="">

        <input type="submit" value="Guardar">
    </form>

</div> <!-- Fin caja principal -->
<?php require_once 'includes/pie.php' ?>
