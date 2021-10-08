<div class="contenedor-noticias tv">
    <?php foreach($peliculas as $pelicula) { ?>
        <div class="noticia cont-tv">
            <a href="/pelicula?id=<?php echo $pelicula->id; ?>" class="titulo-noticia">
                <img loading="lazy" src="../imagenes/<?php echo $pelicula->imagen; ?>">
            </a>
        </div>
    <?php } ?>
</div>