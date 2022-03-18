<?php require_once 'helpers.php';?>

<aside id="sidebar">
    <div id="usuario_logueado" class="bloque">
    <?php if(isset($_SESSION['usuario'])): ?>
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'].$_SESSION['usuario']['apellidos'];?></h3>
        <!-- BOTONES -->
        <a href="/Proyecto/cerrar_sesion.php" class="boton">Cerrar Sesión</a>
        <?php endif; ?>
    </div>

    <div id="login" class="bloque">
        <h3>Identifícate</h3>

            <?php if(isset($_SESSION['error_login'])): ?>
        <div class="alerta-error">
            <?= $_SESSION['error_login'];?>
        </div>
            <?php endif; ?>

        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="example@example.com">

            <label for="password">Constraseña</label>
            <input type="password" name="password">

            <input type="submit" value="Entrar">
        </form>
    </div>

    <div id="register" class="bloque">
        <h3>Registrate</h3>
        <!-- mostrar errores al iniciar sesion -->
        <?php if(isset($_SESSION['completado'])) : ?>
                <div class="alerta alerta-exito">
                    <?=$_SESSION['completado']; ?>
                </div>
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
                <div class="alerta alerta-error">
                    <?echo $_SESSION['errores']['general']; ?>
                </div>
        <?php endif; ?>

        <form action="registro.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '';?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '';?>

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="example@example.com">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '';?>

            <label for="password">Password</label>
            <input type="password" name="password">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '';?>

            <input type="submit" value="Registrarme" name="submit">
        </form>
        <?php borrarErrores(); ?>
    </div>
</aside>