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
            $this->nombre = $args['nombre'] ?? '';
            $this->tipo = $args['tipo'] ?? '';
            $this->precio = $args['precio'] ?? '';
            $this->descripcion = $args['descripcion'] ?? '';
            $this->imagen = $args['imagen'] ?? NULL;
        }
    }