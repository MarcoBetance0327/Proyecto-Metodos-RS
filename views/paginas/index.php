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
    
    <div class="div-menu apartado2">
        <img loading="lazy" src="/imagenes/apartado2.jpg">
        <h2 class="texto-encima">Ordena tu pedido</h2>
        <p class="texto-encima">Proin molestie mauris eget ipsum accumsan maximus. Quisque ornare cursus diam sagittis gravida. Nulla dui purus, venenatis nec ligula id, ultricies pellentesque turpis. In hac habitasse platea dictumst. Nunc lobortis dapibus ipsum, non efficitur leo vehicula vitae. Sed ornare erat lorem, eu auctor mauris efficitur sed. Vestibulum eget ligula sit amet dui fringilla faucibus a eu magna. Maecenas volutpat consectetur ultrices.</p>
        <a href="/pedidos" class="boton boton-a2 texto-encima">Ordena Ya</a>
    </div>

    <p></p>
    
</main>
