<main class="main-index">

    <div class="div-menu">
        <div class="contenedor-menu index">
            <?php foreach($comidas as $comida) { ?>
                <div class="menu">
                    <img loading="lazy" src="/imagenes/<?php echo $comida->imagen; ?>"> 
                    <a href="/comida?id=<?php echo $comida->id; ?>" class="titulo-menu"><?php echo $comida->nombre; ?> $<?php echo $comida->precio; ?></a>
                </div>
            <?php } ?>
        </div>

        <a href="/menu" class="boton">Ver Menú</a>
    </div>
    

    <h2>Pedidos</h2>

</main>
