<?php

    namespace Model;

    class Serie extends ActiveRecord{
        protected static $tabla = 'series';
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
            $this->tipo = $args['tipo'] ?? '';
        }

        public function validar(){
            if(!$this->titulo){
                self::$errores[] = 'Debes Añadir el Título de la Serie';
            }
            if(!$this->trama){
                self::$errores[] = 'Debes Añadir la Trama de la Serie';
            }

            return self::$errores;
        }
    }