<div class="layout-menu">
    <div class="contenedor-menu">
        <?php foreach($comidas as $comida) { ?>
            <div class="noticia">
                <img loading="lazy" src="/imagenes/<?php echo $comida->imagen; ?>"> 
                <a href="/comida?id=<?php echo $comida->id; ?>" class="titulo-encima"><?php echo $comida->nombre; ?></a>
            </div>
        <?php } ?>
    </div>

    <div class="enlaces-redes">
        <a href="#">
            <img src="/imagenes/siguenos_facebook.png">
        </a>
        <a href="#">
            <img src="/imagenes/visitanos_instagram.png">
        </a>
    </div>
</div>
