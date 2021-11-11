<main class="contenedor">
    <h1 class="encabezado-crud">Agregar Elemento</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php' ?>

        <input type="submit" value="Agregar Elemento" class="boton">
    </form>
</main>