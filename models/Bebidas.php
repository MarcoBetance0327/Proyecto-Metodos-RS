<?php

    namespace Model;

    class Bebidas extends ActiveRecord{
        protected static $tabla = 'bebidas';
        protected static $columnaDB = ['id', 'nombre', 'tipo', 'precio'];

        public $id;
        public $nombre;
        public $tipo;
        public $precio;

        public function __construct($args = []){
            
        }
    }