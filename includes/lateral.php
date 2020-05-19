
<?php require_once 'includes/helpers.php'; ?>
<?php session_start() ?>
<aside id="sidebar">
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <form method="post" action="login.php">
            <label for="email">Email</label>
            <input type="email" name="email"/>

            <label for="password">Password</label>
            <input type="password" name="password"/>

            <input type="submit" name="submit" value="Entrar"/>
        </form>
    </div>
    <div id="login" class="bloque">
         <?php if (isset($_SESSION['errores'])): ?>
            <?php var_dump($_SESSION['errores']); ?>
        <?php endif; ?>
        <h3>Registrate</h3>
        <form method="post" action="registro.php">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre"/>
            


            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>

            <label for="email">Email</label>
            <input type="email" name="email"/>

            <label for="password">Password</label>
            <input type="password" name="password"/>

            <input type="submit" name="submit" value="Registrar"/>
        </form>
    </div>
   
</aside> 

