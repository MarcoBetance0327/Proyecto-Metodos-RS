<main class="contenedor seccion">
    <h1 class="encabezado-crud">Actualizar Película</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>

        <input type="submit" value="Actualizar Pelicula" class="boton">
    </form>
    
</main>