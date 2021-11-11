<?php 

    namespace Model;

    class ActiveRecord{
        // Base de Datos
        protected static $db;
        protected static $columnaDB = [];
        protected static $tabla = '';

        // Errores
        protected static $errores = [];

        // Definir la conexión a la BD
        public static function setDB($database){
            self::$db = $database;
        }

        public static function consultarSQL($query){
            // Consultar la base de datos
            $resultado = self::$db->query($query);
            
            // Iterar los resultados
            $array = [];
            while($registro = $resultado->fetch_assoc()){
                $array[] = static::crearObjeto($registro);
            }

            // Liberar Memoria
            $resultado->free();

            // Retornar los resultados
            return $array;
        }

        public static function crearObjeto($registro){
            $objeto = new static;

            foreach($registro as $key => $value){
                if(property_exists($objeto, $key)){
                    $objeto->$key = $value;
                }
            }

            return $objeto;
        }

        public function atributos(){
            $atributos = [];
            foreach(static::$columnaDB as $columna){
                if($columna === 'id') continue;
                $atributos[$columna] = $this->$columna;
            }
            return $atributos;
        }

        public static function all(){
            $query = "SELECT * FROM " . static::$tabla . " ORDER BY id DESC ";

            $resultado = self::consultarSQL($query);

            return $resultado;
        }

        public function guardar(){
            if(!is_null($this->id)){
                $this->actualizar();
            }else{
                $this->crear();
            }
        }

        public function crear(){

            // Sanitizar los datos
            $atributos = $this->sanitizarAtributos();

            // Insertar en la base de datos
            $query = "INSERT INTO " . static::$tabla . "(";
            $query .= join(', ', array_keys($atributos));
            $query .= " ) VALUES (' ";
            $query .= join("', '", array_values($atributos));
            $query .= " ') ";

            $resultado = self::$db->query($query);

            if($resultado){
                // Redireccionar al usuario
                header('Location: /' . static::$tabla);
            }
        }

        public function actualizar(){
            //Sanitizar los atributos
            $atributos = $this->sanitizarAtributos();

            $valores = [];

            foreach($atributos as $key => $value){
                $valores[] = "{$key} = '{$value}'";
            }

            $query = "UPDATE " . static::$tabla . " SET " . join(', ', $valores) . " WHERE id = '" . self::$db->escape_string($this->id) . "' " . " LIMIT 1 ";

            $resultado = self::$db->query($query);

            if($resultado){
                header('Location: /' . static::$tabla);
            }
        }

        public function eliminar(){
            $query = "DELETE FROM " . static::$tabla . " WHERE id = " . self::$db->escape_string($this->id);
            $resultado = self::$db->query($query);

            if($resultado){
                $this->borrarImagen();
                $this->borrarImagen2();
                header('Location: /' . static::$tabla);
            }
        }

        public static function tipo($tipo){
            $query = "SELECT * FROM " . static::$tabla . " WHERE tipo = '${tipo}' " . " ORDER BY id DESC";

            $resultado = self::consultarSQL($query);

            return $resultado;
        }
        
        public static function get($cantidad){
            $query = "SELECT * FROM " . static::$tabla . " ORDER BY id DESC" . " LIMIT " . $cantidad;

            $resultado = self::consultarSQL($query);

            return $resultado;
        }

        public static function find($id){
            $query = "SELECT * FROM " . static::$tabla . " WHERE id = ${id} " . "LIMIT 1";

            $resultado = self::consultarSQL($query);

            return array_shift($resultado);
        }

        public function setImagen($imagen){
            // Elimina la imagen previa
            if(!is_null($this->id)){
                $this->borrarImagen();
            }

            // Asignar al atributo de imagen el nombre de la imagen
            if($imagen){
                $this->imagen = $imagen;
            }
        }

        public function setImagen2($imagen){
            // Elimina la imagen previa
            if(!is_null($this->id)){
                $this->borrarImagen();
            }

            // Asignar al atributo de imagen el nombre de la imagen
            if($imagen){
                $this->imagen2 = $imagen;
            }
        }

        // Eliminar archivo
        public function borrarImagen(){
            // Comprobar si existe el archivo
            $existeArchivo = file_exists(CARPETA_IMAGENES . $this->imagen);
            if($existeArchivo){
                unlink(CARPETA_IMAGENES . $this->imagen);
            } 
        }

        // Eliminar archivo
        public function borrarImagen2(){
            // Comprobar si existe el archivo
            $existeArchivo = file_exists(CARPETA_IMAGENES . $this->imagen2);
            if($existeArchivo){
                unlink(CARPETA_IMAGENES . $this->imagen2);
            } 
        }

        // Validación
        public static function getErrores(){
            return static::$errores;
        }

        public function validar(){
            static::$errores = [];
            return static::$errores;
        }

        public function sanitizarAtributos(){
            $atributos = $this->atributos();
            $sanitizado = [];

            foreach($atributos as $key => $value){
                $sanitizado[$key] = self::$db->escape_string($value);
            }

            return $sanitizado;
        }

        public function sincronizar( $args = []){
            foreach($args as $key => $value){
                if(property_exists($this, $key) && !is_null($value)){
                    $this->$key = $value;
                }
            }
        }
    }