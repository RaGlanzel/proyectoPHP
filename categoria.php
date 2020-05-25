 <?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<?php
        $categoria_actual = conseguirCategoria($db, $_GET['id']);
        
        if(!isset($categoria_actual['id'])){
            header('Location: index.php');
        }
    ?>

<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<div class="principal">
   
    <h1>Entradas de <?=$categoria_actual['nombre']?></h1>
    <?php $entradas = conseguirEntradas($db, null, $_GET['id']);
    if(!empty($entradas)):
        while ($entrada = mysqli_fetch_assoc($entradas)):
      ?>
    <a href="entrada.php?id=<?=$entrada['id']?>">
        <article class="entradas">
            <h2><?=$entrada['titulo']?></h2>
            <span class='fecha'><?=$entrada['Categoria'].' | '.$entrada['fecha']?></span>
            <p><?= substr($entrada['descripcion'], 0, 180)."..."?></p>
        </article>
    </a>
    <?php
        endwhile;
    endif;
    ?>
    
   
</div>




<?php require_once 'includes/pie.php'; ?>
