<?php

    namespace Controllers;
    use MVC\Router;
    use Model\Noticia;
    use Model\Pelicula;
    use Model\Serie;

    class PaginasController{
        public static function index(Router $router){
            
            $noticias = Noticia::get(3);
            $peliculas = Pelicula::get(6);
            $series = Serie::get(6);
            
            $router->render('paginas/index', [
                'noticias' => $noticias,
                'peliculas' => $peliculas,
                'series' => $series
            ]);
        }

        public static function noticias(Router $router){

            $noticias = Noticia::all();

            $router->render('paginas/noticias', [
                'noticias' => $noticias
            ]);
        }

        public static function noticia(Router $router){
            $id = validarORedireccionar('/noticias');

            $noticia = Noticia::find($id);

            $router->render('paginas/noticia', [
                'noticia' => $noticia
            ]);
        }

        public static function peliculas(Router $router){

            $peliculas = Pelicula::all();

            $router->render('paginas/peliculas', [
                'peliculas' => $peliculas
            ]);

        }

        public static function pelicula(Router $router){
            $id = validarORedireccionar('/peliculas');

            $pelicula = Pelicula::find($id);

            $router->render('paginas/pelicula', [
                'pelicula' => $pelicula
            ]);
        }

        public static function series(Router $router){

            $series = Serie::all();

            $router->render('paginas/series', [
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