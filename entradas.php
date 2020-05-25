
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<div class="principal">
    <h1>Todas las entradas</h1>
    <?php
    $entradas = conseguirEntradas($db);
    if (!empty($entradas) && mysqli_num_rows($entradas) >= 1):
        
        while ($entrada = mysqli_fetch_assoc($entradas)):
            ?>
            <a href="entrada.php?id=<?=$entrada['id']?>">
                <article class="entradas">
                    <h2><?= $entrada['titulo'] ?></h2>
                    <span class='fecha'><?= $entrada['Categoria'] . ' | ' . $entrada['fecha'] ?></span>
                    <p><?= substr($entrada['descripcion'], 0, 180) . "..." ?></p>
                </article>
            </a>
            <?php
        endwhile;
    else:
        ?>
        <div class="alerta">No hay entradas en esta categoría</div>
    <?php
    endif;
    ?>

</div>




<?php require_once 'includes/pie.php'; ?>

