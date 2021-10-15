<?php 

    require_once __DIR__ . '/../includes/app.php';

    use MVC\Router;
    use Controllers\PaginasController;
    use Controllers\LoginController;
    use Controllers\NoticiasController;
    use Controllers\PeliculaController;
    use Controllers\SerieController;

    $router = new Router();

    // zona Privada
    $router->get('/noticias/crear' , [NoticiasController::class, 'crear']);
    $router->post('/noticias/crear' , [NoticiasController::class, 'crear']);
    $router->get('/noticias/actualizar' , [NoticiasController::class, 'actualizar']);
    $router->post('/noticias/actualizar' , [NoticiasController::class, 'actualizar']);
    $router->post('/noticias/eliminar' , [NoticiasController::class, 'eliminar']);

    $router->get('/peliculas/crear', [PeliculaController::class, 'crear']);
    $router->post('/peliculas/crear', [PeliculaController::class, 'crear']);
    $router->get('/peliculas/actualizar', [PeliculaController::class, 'actualizar']);
    $router->post('/peliculas/actualizar', [PeliculaController::class, 'actualizar']);
    $router->post('/peliculas/eliminar', [PeliculaController::class, 'eliminar']);

    $router->get('/series/crear', [SerieController::class, 'crear']);
    $router->post('/series/crear', [SerieController::class, 'crear']);
    $router->get('/series/actualizar', [SerieController::class, 'actualizar']);
    $router->post('/series/actualizar', [SerieController::class, 'actualizar']);
    $router->post('/series/eliminar', [SerieController::class, 'eliminar']);

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
    $router->get('/registro', [LoginController::class, 'registro']);
    $router->post('/registro', [LoginController::class, 'registro']);


    $router->comprobarRutas();
?>
    