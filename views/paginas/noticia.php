<main class="contenido-noticia">
    <div class="edicion">
        <a href="noticias/actualizar?id=<?php echo $noticia->id; ?>">
            <img src="/build/img/editar.svg">
        </a>
        <form method="POST" action="/noticias/eliminar">
            <input type="hidden" name="id" value="<?php echo $noticia->id; ?>">
            <input type="hidden" name="tipo" value="noticia">
            <input type="image" src="/build/img/eliminar.svg">
        </form>
    </div>
    <h1><?php echo $noticia->titulo; ?></h1>

    <img loading="lazy" src="/imagenes/<?php echo $noticia->imagen; ?>">

    <p><?php echo $noticia->descripcion; ?></p>

    <div class="div-desc2">
        <img loading="lazy" src="/imagenes/<?php echo $noticia->imagen2; ?>" class="imagen2">
        <p><?php echo $noticia->descripcion2; ?></p>
    </div>
    
</main>