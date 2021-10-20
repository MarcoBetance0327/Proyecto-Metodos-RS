<?php

    namespace Model;

    class Comidas extends ActiveRecord{
        protected static $tabla = 'comidas';
        protected static $columnaDB = ['id', 'nombre', 'tipo', 'precio'];

        public $id;
        public $nombre;
        public $tipo;
        public $precio;

        public function __construct($args = []){
            
        }
    }