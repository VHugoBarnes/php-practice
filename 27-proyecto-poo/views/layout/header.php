<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
    <link rel="shortcut icon" href="<?=base_url?>assets/img/icon.jpg" type="image/x-icon">
    <title>Tienda de camisetas</title>
</head>

<body>

<div class="container">

    <!-- Cabecera -->
    <header id="header">
        <div id="logo">
            <img id="logo" src="<?=base_url?>assets/img/camiseta.png" alt="Camiseta Logo">
            <a href="index.php">Tienda de camisetas</a>
        </div>
    </header>

    <!-- Menu -->
    <?php $categorias = Utils::showCategorias(); ?>
    <nav id="menu">
        <ul>
            <li>
                <a href="#">Inicio</a>
            </li>
            <?php while($categoria = $categorias->fetch_object()): ?>
                <li>
                    <a href="#"><?=$categoria->nombre?></a>
                </li>
            <?php endwhile;?>
        </ul>
    </nav>
    <div class="content">