<div class="contenedor-menu">
    <?php foreach($comidas as $comida) { ?>
        <div class="menu">
            <img loading="lazy" src="/imagenes/<?php echo $comida->imagen; ?>"> 
            <a href="/comida?id=<?php echo $comida->id; ?>" class="titulo-menu"><?php echo $comida->nombre; ?> $<?php echo $comida->precio; ?></a>
        </div>
    <?php } ?>
</div>

