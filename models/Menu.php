<?php

    namespace Model;

    class Menu extends ActiveRecord{
        protected static $tabla = 'noticias';
        protected static $columnaDB = ['id', 'titulo', 'imagen', 'imagen2', 'descripcion', 'descripcion2'];

        public $id;
        public $titulo;
        public $imagen;
        public $imagen2;
        public $descripcion;
        public $descripcion2;

        public function __construct($args = []){
            $this->id = $args['id'] ?? NULL;
            $this->titulo = $args['titulo'] ?? '';
            $this->imagen = $args['imagen'] ?? NULL;
            $this->imagen2 = $args['imagen2'] ?? NULL;
            $this->descripcion = $args['descripcion'] ?? '';
            $this->descripcion2 = $args['descripcion2'] ?? '';
        }

        public function validar(){
            if(!$this->titulo){
                self::$errores[] = "Debes añadir un titulo";
            }
            if(!$this->descripcion){
                self::$errores[] = "Debes añadir la descripción superior";
            }
            if(!$this->descripcion2){
                self::$errores[] = "Debes añadir la descripción inferior";
            }
            if(!$this->imagen){
                self::$errores[] = "Debes añadir la imagen principal";
            }
            if(!$this->imagen2){
                self::$errores[] = "Debes añadir la imagen secundaria";
            }

            return self::$errores;
    
        }
    }