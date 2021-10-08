<div class="contenedor-noticias tv">
    <?php foreach($series as $serie) { ?>
        <div class="noticia cont-tv">
            <a href="/serie?id=<?php echo $serie->id; ?>" class="titulo-noticia">
                <img loading="lazy" src="../imagenes/<?php echo $serie->imagen; ?>">
            </a>
        </div>
    <?php } ?>
</div>