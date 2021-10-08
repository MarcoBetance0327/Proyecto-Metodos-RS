<div class="contenedor-noticias">
    <?php foreach($noticias as $noticia) { ?>
        <div class="noticia">
            <img loading="lazy" src="../imagenes/<?php echo $noticia->imagen; ?>">
            <a href="/noticia?id=<?php echo $noticia->id; ?>" class="titulo-encima"><?php echo $noticia->titulo; ?></a>
        </div>
    <?php } ?>
</div>