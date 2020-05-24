
<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<div class="principal">
    <h1>Crear Entrada</h1>
    <p>Añade nuevas entradas al blog para que los usuarios puedan leerlas</p>
    <form action="guardar-entrada.php" method="post">
        <label for="titulo">Nombre de Categoría</label>
        <input type="text" name="titulo"/>

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion"></textarea>

        <label for="categoria">Categoría</label>
        <select name="categoria">
            <?php
            $categorias = conseguirCategorias($db);
            if(!empty($categorias)):
            while ($categoria = mysqli_fetch_assoc($categorias)):
                ?>
            <option value="<?=$categoria['id']?>">
            <?=$categoria['nombre']?>
            </option>
                <?php
            endwhile;
            endif;
            ?>
        </select>

        <input type="submit" value="Guardar"/>

    </form>
</div>


<?php require_once 'includes/pie.php'; ?>
