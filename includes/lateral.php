


<aside id="sidebar">
    <div id="buscador" class="bloque">
        <h3>Buscar</h3>
        <?php if(isset($_SESSION['error_login'])): ?>
<div class="alerta alerta-error">
    <?=$_SESSION['error_login']; ?>
</div>
<?php endif; ?>
        <form method="post" action="buscar.php">
            
            <input type="text" name="busqueda"/>
            
            <input type="submit" name="submit" value="Buscar"/>
        </form>
    </div>
<?php if(isset($_SESSION['usuario'])): ?>
<div id="login" class="bloque">
    <h3><?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>
    <!--botones-->
    <a href="crear-entradas.php" class="boton boton-naranja">Crear entradas</a>
    <a href="crear-categoria.php" class="boton">Crear categoria</a>
    <a href="mis-datos.php" class="boton boton-verder">Mis datos</a>
    <a href="includes/cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
</div>
<?php endif; ?>
    <?php if(!isset($_SESSION['usuario'])): ?>
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <?php if(isset($_SESSION['error_login'])): ?>
<div class="alerta alerta-error">
    <?=$_SESSION['error_login']; ?>
</div>
<?php endif; ?>
        <form method="post" action="includes/login.php">
            <label for="email">Email</label>
            <input type="email" name="email"/>

            <label for="password">Password</label>
            <input type="password" name="password"/>

            <input type="submit" name="submit" value="Entrar"/>
        </form>
    </div>
    <div id="register" class="bloque">
         <?php //if (isset($_SESSION['errores'])): ?>
            <?php //var_dump($_SESSION['errores']); ?>
        <?php //endif; ?>
        <h3>Registrate</h3>
        <!--Mostrar Error de registro -->
        <?php if(isset($_SESSION['completado'])): ?>
            <div class="alerta alerta-exito">
            <?=$_SESSION['completado']?>
            </div>
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
        <div class="alerta alerta-error">
        <?=$_SESSION['errores']['general']?>
            </div>
        <?php endif; ?>
        <form method="post" action="registro.php">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'Nombre') : ''; ?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

            <label for="email">Email</label>
            <input type="email" name="email"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

            <label for="password">Password</label>
            <input type="password" name="password"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

            <input type="submit" name="submit" value="Registrar"/>
        </form>
        <?php borrarErrores(); ?>
    </div>
   <?php endif; ?>
</aside> 

