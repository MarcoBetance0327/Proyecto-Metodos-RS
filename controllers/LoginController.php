<?php

    namespace Controllers;
    use Model\Admin;
    use MVC\Router;

    class LoginController{
        public static function login(Router $router){

            $errores = [];

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $auth = new Admin($_POST);

                $errores = $auth->validar();

                if(empty($errores)){
                    $resultado = $auth->existeUsuario();

                    if(!$resultado){
                        $errores = Admin::getErrores();
                    }else{
                        $autenticado = $auth->comprobarPassword($resultado);

                        if($autenticado){ 
                            $auth->autenticar();
                        }else{
                            $errores = Admin::getErrores();
                        }
                    }
                }
            }

            $router->render('auth/login', [
                'errores' => $errores
            ]);
        }

        public static function registro(Router $router){

            $router->render('auth/registro');
        }

        public static function logout(){
            session_start();

            $_SESSION = [];

            header('Location: /');
        }
    }