<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Videojuegos</title>
</head>
<body>
<!-- HEADER -->
<header id="cabecera">
    <div id="logo">
        <a href="index.php">
            Blog de Videojuegos
        </a>
    </div>
<!-- MENU -->
    <nav id="menu">
    <ul>
        <li><a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="index.php">Categoria 1</a>
        </li>

        <li>
            <a href="index.php">Categoria 2</a>
        </li>
        <li>
            <a href="index.php">Categoria </a>
        </li>
        <li>
            <a href="index.php">Categoria 4</a>
        </li>
        <li>
            <a href="index.php">Sobre mi</a>
        </li>
        <li>
            <a href="index.php">Contacto</a>
        </li>
    </ul>
    </nav>
</header>

<div id="contenedor">
    <!-- SIDEBAR -->
    <aside id="sidebar">
        <div id="login" class="bloque">
            <h3>Identifícate</h3>
            <form action="login.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="example@example.com">

                <label for="password">Constraseña</label>
                <input type="password" name="password">

                <input type="submit" value="Login">
            </form>

            <div id="register" class="block-aside">
                <h3>Registrate</h3>
                <form action="register.php" method="post">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="example@example.com">

                    <label for="password">Password</label>
                    <input type="password" name="password">

                    <input type="submit" value="Entrar">
                </form>
        </div>
    </aside>
<!-- PRINCIPAL BOX -->
    <div class="principal">
        <h1>Ultimas entradas</h1>
        <article    class="entrada">
            <h2>titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet, consectet ut labore et dolor  sit
            </p>
        </article>
        <article    class="entrada">
            <h2>titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet, consectet ut labore et dolor  sit
            </p>
        </article>
        <article    class="entrada">
            <h2>titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet, consectet ut labore et dolor  sit
            </p>
        </article>
        <article    class="entrada">
            <h2>titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet, consectet ut labore et dolor  sit
            </p>
        </article>

    </div>
<!-- FOOTER -->
</body>
</html>
