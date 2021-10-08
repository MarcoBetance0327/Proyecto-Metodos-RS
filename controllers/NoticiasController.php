<?php

    namespace Controllers;

    use Model\Noticia;
    use MVC\Router;
    use Intervention\Image\ImageManagerStatic as Image;

    class NoticiasController{
        public static function crear(Router $router){

            $noticia = new Noticia;
            // Arreglo con mensajes de errores
            $errores = Noticia::getErrores();

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                // Crear una nueva instancia 
                $noticia = new Noticia($_POST['noticia']);

                // Generar nombre único
                $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";
                $nombreImagen2 = md5( uniqid( rand(), true ) ) . ".jpg";
        
                // Setear Imagen
                // Realiza un resize a la imagen con intervention
                if($_FILES['noticia']['tmp_name']['imagen'] || $_FILES['noticia']['tmp_name']['imagen2']){
                    $image = Image::make($_FILES['noticia']['tmp_name']['imagen'])->fit(800, 600);
                    $image2 = Image::make($_FILES['noticia']['tmp_name']['imagen2'])->fit(800, 600);
                    $noticia->setImagen($nombreImagen);
                    $noticia->setImagen2($nombreImagen2);
                }

                // Validar
                $errores = $noticia->validar();

                if(empty($errores)){
                    // Guarda la imagen en el servidor
                    $image->save(CARPETA_IMAGENES . $nombreImagen);
                    $image2->save(CARPETA_IMAGENES . $nombreImagen2);

                    // Guarda en la base de datos
                    $resultado = $noticia->guardar();
                }
            }


            $router->render('noticias/crear', [
                'noticia' => $noticia,
                'errores' => $errores
            ]);
        }

        public static function actualizar(Router $router){
            $id = validarORedireccionar('/noticias');

            $noticia = Noticia::find($id);

            $errores = Noticia::getErrores();

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $args = $_POST['noticia'];

                $noticia->sincronizar($args);

                $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";
                $nombreImagen2 = md5( uniqid( rand(), true)) . ".jpg";

                if($_FILES['noticia']['tmp_name']['imagen']){
                    $image = Image::make($_FILES['noticia']['tmp_name']['imagen'])->fit(800, 600);
                    $image2 = Image::make($_FILES['noticia']['tmp_name']['imagen2'])->fit(800, 600);
                    $noticia->setImagen($nombreImagen);
                    $noticia->setImagen2($nombreImagen2);
                }

                $errores = $noticia->validar();

                if(empty($errores)){
                    if($_FILES['noticia']['tmp_name']['imagen'] || $_FILES['noticia']['tmp_name']['imagen2']){
                        // Guarda la imagen en el servidor
                        $image->save(CARPETA_IMAGENES . $nombreImagen);
                        $image2->save(CARPETA_IMAGENES . $nombreImagen2);
                    }

                    // Guarda en la base de datos
                    $resultado = $noticia->guardar();
                }
            }


            $router->render('noticias/actualizar', [
                'noticia' => $noticia,
                'errores' => $errores
            ]);
        }

        public static function eliminar(){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                //Validar ID
                $id = $_POST['id'];
                $id = filter_var($id, FILTER_VALIDATE_INT);

                if($id){

                    $tipo = $_POST['tipo'];

                    if(validarTipoContenido($tipo)){
                        $noticia = Noticia::find($id);
                        $noticia->eliminar();
                    }
                }
            }
        }
    }