<main class="main-noticias">
    <div class="div_edicion">
        <h2>Menú</h2>
        <!-- <a href="/noticias/crear" class="enlace-crear">Crear Noticia</a> -->
    </div>

    <nav class="navegacion">
        <button type="button" data-paso="1" class="boton-inicial"><h3>Empanizados</h3></button>
        <button type="button" data-paso="2" ><h3>Tropicales</h3></button>
        <button type="button" data-paso="3" class="boton-final"><h3>Frios</h3></button>
    </nav>

    <div id="paso-1" class="seccion">
        <div class="contenedor-menu">
            <?php foreach($comidas as $comida) { ?>
                <div class="menu">
                    <img loading="lazy" src="/imagenes/<?php echo $comida->imagen; ?>"> 
                    <a href="/comida?id=<?php echo $comida->id; ?>" class="titulo-menu"><?php echo $comida->nombre; ?> $<?php echo $comida->precio; ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
    <div id="paso-2" class="seccion">
        <div class="contenedor-menu">
            <?php foreach($comidas2 as $comida2) { ?>
                <div class="menu">
                    <img loading="lazy" src="/imagenes/<?php echo $comida2->imagen; ?>"> 
                    <a href="/comida2?id=<?php echo $comida2->id; ?>" class="titulo-menu"><?php echo $comida2->nombre; ?> $<?php echo $comida2->precio; ?></a>
                </div>
            <?php } ?>
        </div>

    </div>
    <div id="paso-3" class="seccion">
        <h1>Apartado 3</h1>
    </div>

    <!-- <div class="cont-list">
        <?php include 'listado_comida.php'; ?>
    </div> -->

    <div id="disqus_thread"></div>
    <div class="comentarios"></div>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://sushi3.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        
    <script src="build/js/bundle.min.js"></script>

</main>
