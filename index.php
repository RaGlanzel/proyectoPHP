<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<div class="principal">
    <h1>Ultimas entradas</h1>
    <?php $entradas = conseguirUltimasEntradas($db);
    if(!empty($entradas)):
        while ($entrada = mysqli_fetch_assoc($entradas)):
      ?>
    <a href="">
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
    
    <div id="ver-todas">
        <a href="">Ver todas la entradas</a>
    </div>
</div>




<?php require_once 'includes/pie.php'; ?>

</body>
</html>