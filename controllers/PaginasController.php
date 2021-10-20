<?php

    namespace Controllers;
    use MVC\Router;
    use Model\Menu;
    use Model\Comidas;
    use Model\Bebidas;

    class PaginasController{
        public static function index(Router $router){
            
            $menu = Menu::get(3);
            
            $router->render('paginas/index', [
                'menu' => $menu,
            ]);
        }

        public static function menu(Router $router){

            $comidas = Comidas::all();
            $bebidas = Bebidas::all();

            $router->render('paginas/menu', [
                'comidas' => $comidas,
                'bebidas' => $bebidas
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

            $router->render('paginas/pedidos', [
            ]);

        }

        public static function acerca(Router $router){

            $router->render('paginas/acerca-de', [
            ]);

        }
    }