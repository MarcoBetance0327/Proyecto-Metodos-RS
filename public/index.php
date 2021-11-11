<?php 

    require_once __DIR__ . '/../includes/app.php';

    use MVC\Router;
    use Controllers\PaginasController;
    use Controllers\LoginController;
    use Controllers\MenuController;
    use Controllers\PedidosController;
    // use Controllers\SerieController;

    $router = new Router();

    // zona Privada
    $router->get('/menu/crear' , [MenuController::class, 'crear']);
    $router->post('/menu/crear' , [MenuController::class, 'crear']);
    // $router->get('/noticias/actualizar' , [MenuController::class, 'actualizar']);
    // $router->post('/noticias/actualizar' , [MenuController::class, 'actualizar']);
    // $router->post('/noticias/eliminar' , [MenuController::class, 'eliminar']);

    // $router->get('/peliculas/crear', [PedidosController::class, 'crear']);
    // $router->post('/peliculas/crear', [PedidosController::class, 'crear']);
    // $router->get('/peliculas/actualizar', [PedidosController::class, 'actualizar']);
    // $router->post('/peliculas/actualizar', [PedidosController::class, 'actualizar']);
    // $router->post('/peliculas/eliminar', [PedidosController::class, 'eliminar']);

    // $router->get('/series/crear', [SerieController::class, 'crear']);
    // $router->post('/series/crear', [SerieController::class, 'crear']);
    // $router->get('/series/actualizar', [SerieController::class, 'actualizar']);
    // $router->post('/series/actualizar', [SerieController::class, 'actualizar']);
    // $router->post('/series/eliminar', [SerieController::class, 'eliminar']);

    // Zona Publica
    $router->get('/', [PaginasController::class, 'index']);

    $router->get('/menu', [PaginasController::class, 'menu']);
    $router->get('/noticia', [PaginasController::class, 'noticia']);

    $router->get('/pedidos', [PaginasController::class, 'pedidos']);
    $router->get('/pelicula', [PaginasController::class, 'pelicula']);

    $router->get('/acerca-de', [PaginasController::class, 'acerca']);
    $router->get('/serie', [PaginasController::class, 'serie']);

    // Login y Autenticación 
    $router->get('/login', [LoginController::class, 'login']);
    $router->post('/login', [LoginController::class, 'login']);

    $router->get('/logout', [LoginController::class, 'logout']);

    $router->get('/registro', [LoginController::class, 'registro']);
    $router->post('/registro', [LoginController::class, 'registro']);


    $router->comprobarRutas();
?>
    