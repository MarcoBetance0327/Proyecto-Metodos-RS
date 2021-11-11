<?php

    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? null;

    if(!isset($inicio)){
        $inicio = false;
    }

    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Food</title>
        <link rel="stylesheet" href="/build/css/app.css">
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    </head>
    <body>
        <header class="header">
            <div class="apartados-header">
                <div class="div-enlaces">
                    <a href="/menu">Menú</a>
                    <a href="/pedidos">Pedidos</a>
                    <a href="/acerca-de">Acerca de</a>
                </div>

                <div class="div-login">
                    <?php if($auth): ?>
                        <a href="/logout" class="enlace-login">Cerrar Sesión</a>
                    <?php else: ?>
                        <a href="/login" class="enlace-login">Login</a> 
                        <h2>|</h2>
                        <a href="/registro" class="enlace-login">Registrarse</a> 
                    <?php endif; ?>
                </div>
            </div>

            <a href="/" class="enlace-icono"><img src="../build/img/icono.png"></a>

        </header>

        <div class="fondo">
            <?php echo $contenido; ?>
        </div>   

        <footer class="footer">
            <div class="div-enlaces">
                <a href="/menu">Menú</a>
                <a href="/pedidos">Pedidos</a>
                <a href="/acerca-de">Acerca de</a>
            </div>

            <p class="copyright">Todos los derechos Reservados <?php echo date('Y'); ?> &copy;</p>
        </footer>

        <script src="build/js/bundle.min.js"></script>
        
    </body>
</html>
