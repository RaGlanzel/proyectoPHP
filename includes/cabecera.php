<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./assets/css/estilos.css"/>
        <title>Blog de VideoJuegos</title>
    </head>
    <body>
        <header id="cabecera">
            <div id="logo">
                <a href="index.php">Blog de Juegos</a>
            </div>

            <nav id="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <?php
                    $categorias = conseguirCategorias($db);
                    if(!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                        ?>
                        <li><a href="categoria.php?id=<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></a></li>
                    <?php
                    
                    endwhile; 
                    endif;
                    
                    ?>
                    <li><a href="index.php">Sobre nosotros</a></li>
                    <li><a href="index.php">Contactos</a></li>
                </ul>
            </nav> 
            <div class="clearfix"></div>
        </header>
        <div id="contenedor">
