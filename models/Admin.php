<?php 

    namespace Model;

    class Admin extends ActiveRecord{
        protected static $tabla = 'usuarios';
        protected static $columnaDB = ['id', 'email', 'password'];

        public $id;
        public $email;
        public $password;

        public function __construct( $args = []){
            $this->id = $args['id'] ?? null;
            $this->email = $args['email'] ?? '';
            $this->password = $args['password'] ?? '';
        }

        public function validar(){
            if(!$this->email){
                self::$errores[] = 'El Email es obligatorio';
            }
            if(!$this->password){
                self::$errores[] = 'El Password es obligatorio';
            }
            
            return self::$errores;
        }

        public function existeUsuario(){
            // Revisar si un usuario existe o no
            $query = "SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";

            $resultado = self::$db->query($query);

            if(!$resultado->num_rows){
                self::$errores[] = 'El Usuario no existe';
                return;
            }

            return $resultado;
        }

        public function comprobarPassword($resultado){
            $usuario = $_POST['email'];
            $password = $_POST['password'];

            $query = "SELECT COUNT(*) FROM usuarios WHERE email = '$usuario' AND password = '$password' ";

            $resultado = self::$db->query($query);

            return $resultado;
        }

        public function autenticar(){
            session_start();

            $_SESSION['usuario'] = $this->email;
            $_SESSION['login'] = true;

            header('Location: /');
        }
    }