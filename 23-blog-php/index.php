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
                <li><a href="index.php">Categoría 1</a></li>
                <li><a href="index.php">Categoría 2</a></li>
                <li><a href="index.php">Categoría 3</a></li>
                <li><a href="index.php">Categoría 4</a></li>
                <li><a href="index.php">Sobre mí</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>

    <div id="contenedor">
    <!-- Barra lateral -->
    <aside id="barraLateral">
        <!-- LOGIN -->
        <div id="inicioSesion" class="block-aside">
            <h3>Identifícate</h3>
            <form action="inicioSesion.php" method="POST">
                <label for="correo">e-mail</label>
                <input type="email" name="correo">

                <label for="contrasena">Contraseña</label>
                <input type="passwords" name="contrasena">

                <input type="submit" value="Entrar">
            </form>
        </div>
        <!-- REGISTER -->
        <div id="registro" class="block-aside">
            <h3>Regístrate</h3>
            <form action="registro.php" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos">

                <label for="correo">e-mail</label>
                <input type="email" name="correo">

                <label for="contrasena">Contraseña</label>
                <input type="passwords" name="contrasena">

                <input type="submit" value="Registrarse">
            </form>
        </div>
    </aside>

    <!-- Caja principal -->
    <div id="principal">

        <h1>Últimas entradas</h1>
        <article class="entrada">
            <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Ullamco officia nostrud qui fugiat sint commodo nulla occaecat. Ut dolore ea incididunt sit dolor mollit ut esse magna nulla. Eu duis commodo magna sunt sunt fugiat proident nostrud officia fugiat sunt enim aute. Culpa labore cupidatat dolor duis fugiat ea.
                    Laboris officia laborum magna in adipisicing excepteur aliqua culpa non excepteur irure excepteur. Tempor consectetur aliqua excepteur eu. Qui incididunt in pariatur velit tempor incididunt.
                    Mollit sint ullamco amet amet laboris ex non nostrud nostrud. Magna excepteur ut occaecat ad commodo sit nisi amet dolore incididunt ea anim excepteur laboris. Tempor labore dolore ullamco fugiat. Velit incididunt enim consectetur eiusmod ullamco sunt. Dolore reprehenderit laborum cillum tempor pariatur laborum ullamco reprehenderit mollit irure sunt anim officia sunt.
                </p>
            </a>
        </article>
        <article class="entrada">
            <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Ullamco officia nostrud qui fugiat sint commodo nulla occaecat. Ut dolore ea incididunt sit dolor mollit ut esse magna nulla. Eu duis commodo magna sunt sunt fugiat proident nostrud officia fugiat sunt enim aute. Culpa labore cupidatat dolor duis fugiat ea.
                    Laboris officia laborum magna in adipisicing excepteur aliqua culpa non excepteur irure excepteur. Tempor consectetur aliqua excepteur eu. Qui incididunt in pariatur velit tempor incididunt.
                    Mollit sint ullamco amet amet laboris ex non nostrud nostrud. Magna excepteur ut occaecat ad commodo sit nisi amet dolore incididunt ea anim excepteur laboris. Tempor labore dolore ullamco fugiat. Velit incididunt enim consectetur eiusmod ullamco sunt. Dolore reprehenderit laborum cillum tempor pariatur laborum ullamco reprehenderit mollit irure sunt anim officia sunt.
                </p>
            </a>
        </article>
        <article class="entrada">
            <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Ullamco officia nostrud qui fugiat sint commodo nulla occaecat. Ut dolore ea incididunt sit dolor mollit ut esse magna nulla. Eu duis commodo magna sunt sunt fugiat proident nostrud officia fugiat sunt enim aute. Culpa labore cupidatat dolor duis fugiat ea.
                    Laboris officia laborum magna in adipisicing excepteur aliqua culpa non excepteur irure excepteur. Tempor consectetur aliqua excepteur eu. Qui incididunt in pariatur velit tempor incididunt.
                    Mollit sint ullamco amet amet laboris ex non nostrud nostrud. Magna excepteur ut occaecat ad commodo sit nisi amet dolore incididunt ea anim excepteur laboris. Tempor labore dolore ullamco fugiat. Velit incididunt enim consectetur eiusmod ullamco sunt. Dolore reprehenderit laborum cillum tempor pariatur laborum ullamco reprehenderit mollit irure sunt anim officia sunt.
                </p>
            </a>
        </article>
        <article class="entrada">
            <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Ullamco officia nostrud qui fugiat sint commodo nulla occaecat. Ut dolore ea incididunt sit dolor mollit ut esse magna nulla. Eu duis commodo magna sunt sunt fugiat proident nostrud officia fugiat sunt enim aute. Culpa labore cupidatat dolor duis fugiat ea.
                    Laboris officia laborum magna in adipisicing excepteur aliqua culpa non excepteur irure excepteur. Tempor consectetur aliqua excepteur eu. Qui incididunt in pariatur velit tempor incididunt.
                    Mollit sint ullamco amet amet laboris ex non nostrud nostrud. Magna excepteur ut occaecat ad commodo sit nisi amet dolore incididunt ea anim excepteur laboris. Tempor labore dolore ullamco fugiat. Velit incididunt enim consectetur eiusmod ullamco sunt. Dolore reprehenderit laborum cillum tempor pariatur laborum ullamco reprehenderit mollit irure sunt anim officia sunt.
                </p>
            </a>
        </article>
        <div id="ver-todas">
            <a href="">Ver todas las entradas</a>
        </div>
    </div>
    <!-- Fin principal -->
    <div class="clearfix"></div>
    </div>

    <!-- Pie de página -->
    <footer id="pie">
        <p>Desarrollado por Víctor Hugo Vázquez Gómez &copy; 2021</p>
    </footer>

</body>
</html>