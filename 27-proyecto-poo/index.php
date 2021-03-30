<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/img/icon.jpg" type="image/x-icon">
    <title>Tienda de camisetas</title>
</head>
<body>
    
<!-- Cabecera -->
<header id="header">
    <div id="logo">
        <img id="logo" src="assets/img/camiseta.png" alt="Camiseta Logo">
        <a href="index.php">Tienda de camisetas</a>
    </div>
</header>

<!-- Menu -->
<nav id="menu">
    <ul>
        <li>
            <a href="#">Inicio</a>
        </li>
        <li>
            <a href="#">Categoria #1</a>
        </li>
        <li>
            <a href="#">Categoria #2</a>
        </li>
        <li>
            <a href="#">Categoria #3</a>
        </li>
        <li>
            <a href="#">Categoria #4</a>
        </li>
        <li>
            <a href="#">Categoria #5</a>
        </li>
    </ul>
</nav>

<div class="content">

    <!-- Barra lateral -->
    <aside id="lateral">
        <div id="login" class="block_aside">
            <form action="#" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <input type="button" value="Enviar">
            </form>
            <a href="#">Mis pedidos</a>            
            <a href="#">Gestionar pedidos</a>            
            <a href="#">Gestionar categorias</a>            
        </div>    
    </aside>

    <!-- Contenido central -->
    <div class="central">
        <div class="product">
            <img src="assets/img/camiseta.png" alt="Producto">
            <h2>Camiseta azúl ancha</h2>
            <p>$30</p>
            <a href="#">Comprar</a>
        </div>
        <div class="product">
            <img src="assets/img/camiseta.png" alt="Producto">
            <h2>Camiseta azúl ancha</h2>
            <p>$30</p>
            <a href="#">Comprar</a>
        </div>
        <div class="product">
            <img src="assets/img/camiseta.png" alt="Producto">
            <h2>Camiseta azúl ancha</h2>
            <p>$30</p>
            <a href="#">Comprar</a>
        </div>
        <div class="product">
            <img src="assets/img/camiseta.png" alt="Producto">
            <h2>Camiseta azúl ancha</h2>
            <p>$30</p>
            <a href="#">Comprar</a>
        </div>
    </div>

</div>

<!-- Pie de página -->
<footer id="footer">
    <p>Desarrollado por Víctor Hugo Vázquez Gómez &copy; <?=date('Y')?></p>
</footer>

</body>
</html>