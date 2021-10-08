<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PelisBlogs</title>
        <link rel="stylesheet" href="/build/css/app.css">
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    </head>
    <body>
        <header class="header">
            <a href="/" class="enlace-icono">
                <img src="../build/img/icono.svg">
            </a>

            <div class="div-enlaces">
                <a href="/noticias">Noticias</a>
                <a href="/peliculas">Peliculas</a>
                <a href="/series">Series</a>
            </div>

            <div class="div-login">
                <a href="/login" class="enlace-login">Login</a> 
                <h2>|</h2>
                <a href="/registro" class="enlace-login">Registrarse</a> 
            </div>
        </header>

        <div class="fondo">
            <?php echo $contenido; ?>
        </div>   

        <footer class="footer">
            <div class="div-enlaces">
                <a href="/noticias">Noticias</a>
                <a href="/peliculas">Peliculas</a>
                <a href="/series">Series</a>
            </div>

            <p class="copyright">Todos los derechos Reservados <?php echo date('Y'); ?> &copy;</p>
        </footer>
        
    </body>
</html>