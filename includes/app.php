<?php 

    require 'config/database.php';
    require 'funciones.php';
    require __DIR__ . '/../vendor/autoload.php';

    // Conectar Base de Datos

    $db = conectarDB();

    use Model\ActiveRecord;

    ActiveRecord::setDB($db);