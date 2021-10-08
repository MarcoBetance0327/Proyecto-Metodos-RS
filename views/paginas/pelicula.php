<main class="contenido-noticia">
    <div class="edicion">
        <a href="peliculas/actualizar?id=<?php echo $pelicula->id; ?>">
            <img src="/build/img/editar.svg">
        </a>
        <form method="POST" action="/peliculas/eliminar">
            <input type="hidden" name="id" value="<?php echo $pelicula->id; ?>">
            <input type="hidden" name="tipo" value="pelicula">
            <input type="image" src="/build/img/eliminar.svg">
        </form>
    </div>

    <div class="contenedor-tv">
        <img loading="lazy" src="/imagenes/<?php echo $pelicula->imagen; ?>">

        <div>
        <h1><?php echo $pelicula->titulo; ?> (<?php echo $pelicula->año; ?>)</h1>
            <p><?php echo $pelicula->trama; ?></p>
        </div>
    </div>
</main>