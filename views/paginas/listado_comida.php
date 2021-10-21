<div class="layout-menu">
    <div class="contenedor-menu">
        <?php foreach($comidas as $comida) { ?>
            <div class="noticia">
                <img loading="lazy" src="/imagenes/<?php echo $comida->imagen; ?>"> 
                <a href="/comida?id=<?php echo $comida->id; ?>" class="titulo-encima"><?php echo $comida->nombre; ?></a>
            </div>
        <?php } ?>
    </div>

    <p>Hola Mundo</p>
</div>
