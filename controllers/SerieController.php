<?php 

    namespace Controllers;
    use MVC\Router;
    use Intervention\Image\ImageManagerStatic as Image;
    use Model\Serie;

    class SerieController{
        public static function crear(Router $router){

            $serie = new Serie;

            $errores = Serie::getErrores();

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $serie = new Serie($_POST['serie']);

                $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";

                if($_FILES['serie']['tmp_name']['imagen']){
                    $image = Image::make($_FILES['serie']['tmp_name']['imagen']);
                    $serie->setImagen($nombreImagen);
                }

                $errores = $serie->validar();

                if(empty($errores)){
                    $image->save(CARPETA_IMAGENES . $nombreImagen);

                    $resultado = $serie->guardar();
                }
            }

            $router->render('series/crear', [
                'serie' => $serie,
                'errores' => $errores
            ]);
        }

        public static function actualizar(Router $router){
            $id = validarORedireccionar('/series');

            $serie = Serie::find($id);

            $errores = Serie::getErrores();

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $args = $_POST['serie'];

                $serie->sincronizar($args);

                $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";

                if($_FILES['serie']['tmp_name']['imagen']){
                    $image = Image::make($_FILES['serie']['tmp_name']['imagen']);
                    $serie->setImagen($nombreImagen);
                }

                $errores = $serie->validar();

                if(empty($errores)){
                    if($_FILES['serie']['tmp_name']['imagen']){
                        // Guarda la imagen en el servidor
                        $image->save(CARPETA_IMAGENES . $nombreImagen);
                    }

                    // Guarda en la base de datos
                    $resultado = $serie->guardar();
                }
            }


            $router->render('series/actualizar', [
                'serie' => $serie,
                'errores' => $errores
            ]);
        }

        public static function eliminar(Router $router){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                //Validar id
                $id = $_POST['id'];
                $id = filter_var($id, FILTER_VALIDATE_INT);

                if($id){
                    $tipo = $_POST['tipo'];

                    if(validarTipoContenido($tipo)){
                        $serie = Serie::find($id);
                        $serie->eliminar();
                    }
                }
            }
        }
    }