<?php require_once 'includes/helpers.php' ?>
<?php require_once 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Blog</title>
</head>
<body>
    
    <!-- Cabecera -->
    <header id="cabecera">
        <!-- Logo -->
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>
        <!-- Menu -->
        <nav id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <!-- Bucle de categorias -->
                <?php   
                    $categorias = conseguirCategorias($db);
                    while($categoria = mysqli_fetch_assoc($categorias)): 
                ?>
                    <li>
                        <a href="categoria.php?id=<?=$categoria['id']?>">
                            <?=$categoria['nombre']?>
                        </a>
                    </li>
                <?php endwhile; ?>
                <!-- Fin del bucle -->
                <li><a href="index.php">Sobre mí</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <div id="contenedor">