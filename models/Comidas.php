<?php

    namespace Model;

    class Comidas extends ActiveRecord{
        protected static $tabla = 'comidas';
        protected static $columnaDB = ['id', 'nombre', 'tipo', 'precio', 'descripcion', 'imagen'];

        public $id;
        public $nombre;
        public $tipo;
        public $precio;
        public $descripcion;
        public $imagen;

        public function __construct($args = []){
            $this->id = $args['id'] ?? NULL;
            $this->id = $args['nombre'] ?? '';
            $this->id = $args['tipo'] ?? '';
            $this->id = $args['precio'] ?? '';
            $this->id = $args['descripcion'] ?? '';
            $this->id = $args['imagen'] ?? NULL;
        }
    }