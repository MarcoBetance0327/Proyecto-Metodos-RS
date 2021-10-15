<?php 

    namespace Controllers;
    use MVC\Router;
    use Intervention\Image\ImageManagerStatic as Image;
    use Model\Pedidos;

    class PedidosController{
        public static function crear(Router $router){

            $pelicula = new Pedidos;

            $errores = Pedidos::getErrores();

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $pelicula = new Pedidos($_POST['pelicula']);

                $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";

                if($_FILES['pelicula']['tmp_name']['imagen']){
                    $image = Image::make($_FILES['pelicula']['tmp_name']['imagen']);
                    $pelicula->setImagen($nombreImagen);
                }

                $errores = $pelicula->validar();

                if(empty($errores)){
                    $image->save(CARPETA_IMAGENES . $nombreImagen);

                    $resultado = $pelicula->guardar();
                }
            }

            $router->render('peliculas/crear', [
                'pelicula' => $pelicula,
                'errores' => $errores
            ]);
        }

        public static function actualizar(Router $router){
            $id = validarORedireccionar('/peliculas');

            $pelicula = Pedidos::find($id);

            $errores = Pedidos::getErrores();

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $args = $_POST['pelicula'];

                $pelicula->sincronizar($args);

                $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";

                if($_FILES['pelicula']['tmp_name']['imagen']){
                    $image = Image::make($_FILES['pelicula']['tmp_name']['imagen']);
                    $pelicula->setImagen($nombreImagen);
                }

                $errores = $pelicula->validar();

                if(empty($errores)){
                    if($_FILES['pelicula']['tmp_name']['imagen']){
                        // Guarda la imagen en el servidor
                        $image->save(CARPETA_IMAGENES . $nombreImagen);
                    }

                    // Guarda en la base de datos
                    $resultado = $pelicula->guardar();
                }
            }


            $router->render('peliculas/actualizar', [
                'pelicula' => $pelicula,
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
                        $pelicula = Pedidos::find($id);
                        $pelicula->eliminar();
                    }
                }
            }
        }
    }