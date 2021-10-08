<?php

    namespace Model;

    class Pelicula extends ActiveRecord{
        protected static $tabla = 'peliculas';
        protected static $columnaDB = ['id', 'titulo', 'año', 'imagen', 'trama'];

        public $id;
        public $titulo;
        public $año;
        public $imagen;
        public $trama;

        public function __construct($args = []){
            $this->id = $args['id'] ?? NULL;
            $this->titulo = $args['titulo'] ?? '';
            $this->año = $args['año'] ?? 2021;
            $this->imagen = $args['imagen'] ?? NULL;
            $this->trama = $args['trama'] ?? '';
        }

        public function validar(){
            if(!$this->titulo){
                self::$errores[] = "Debes Añadir el Titulo de la Película";
            }
            if(!$this->trama){
                self::$errores[] = "Debes Añadir la Trama de la Película";
            }
            // if(!$this->imagen){
            //     self::$errores[] = "Debes Añadir la Imagen de la Película";
            // }

            return self::$errores;
        }
    }