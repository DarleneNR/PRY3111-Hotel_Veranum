<?php

// Función para almacenar los mensajes de confirmaciones
session_start();

define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'bd_hotel_veranum');

// Aqui se realiza la conexion de base de datos
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
    die();
}

?>