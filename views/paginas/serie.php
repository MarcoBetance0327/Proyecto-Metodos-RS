<main class="contenido-noticia">
    <div class="edicion">
        <a href="/series/actualizar?id=<?php echo $serie->id; ?>">
            <img src="/build/img/editar.svg">
        </a>
        <form method="POST" action="/series/eliminar">
            <input type="hidden" name="id" value="<?php echo $serie->id; ?>">
            <input type="hidden" name="tipo" value="serie">
            <input type="image" src="/build/img/eliminar.svg">
        </form>
    </div>

    <div class="contenedor-tv">
        <img loading="lazy" src="/imagenes/<?php echo $serie->imagen; ?>">

        <div>
            <h1><?php echo $serie->titulo; ?> (<?php echo $serie->año; ?>)</h1>
            <p><?php echo $serie->trama; ?></p>
        </div>
    </div>
</main>