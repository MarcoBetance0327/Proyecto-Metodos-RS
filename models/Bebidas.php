<?php

    namespace Model;

    class Bebidas extends ActiveRecord{
        protected static $tabla = 'bebidas';
        protected static $columnaDB = ['id', 'nombre', 'tipo', 'precio', 'descripcion', 'imagen'];

        public $id;
        public $nombre;
        public $tipo;
        public $precio;
        public $descripcion;
        public $imagen;

        public function __construct($args = []){
            
        }
    }