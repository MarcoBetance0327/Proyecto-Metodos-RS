<?php

    namespace Controllers;
    use MVC\Router;
    use Model\Menu;
    use Model\Pedidos;
    use Model\Serie;

    class PaginasController{
        public static function index(Router $router){
            
            $menu = Menu::get(3);
            $pedidos = Pedidos::get(6);
            $series = Serie::get(6);
            
            $router->render('paginas/index', [
                'menu' => $menu,
                'pedidos' => $pedidos,
                'series' => $series
            ]);
        }

        public static function menu(Router $router){

            $menu = Menu::all();

            $router->render('paginas/menu', [
                'menu' => $menu
            ]);
        }

        public static function noticia(Router $router){
            $id = validarORedireccionar('/noticias');

            $noticia = Menu::find($id);

            $router->render('paginas/noticia', [
                'noticia' => $noticia
            ]);
        }

        public static function pedidos(Router $router){

            $pedidos = Pedidos::all();

            $router->render('paginas/pedidos', [
                'pedidos' => $pedidos
            ]);

        }

        public static function pelicula(Router $router){
            $id = validarORedireccionar('/peliculas');

            $pelicula = Pedidos::find($id);

            $router->render('paginas/pelicula', [
                'pelicula' => $pelicula
            ]);
        }

        public static function acerca(Router $router){

            $series = Serie::all();

            $router->render('paginas/acerca-de', [
                'series' => $series
            ]);
        }

        public static function serie(Router $router){
            $id = validarORedireccionar('/series');

            $serie = Serie::find($id);

            $router->render('paginas/serie', [
                'serie' => $serie
            ]);
        }
    }