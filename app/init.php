<?php
session_start();
if (empty($_SESSION['key'])) {
  /*
  bin2hex = Devuelve una cadena ascii que contiene la representación hexadecimal de un string que va en su parámetro
  random_bytes(32) = Genera bytes aleatorios seguros. es el tamaño de la cadena
  */
  $_SESSION['key'] = bin2hex(random_bytes(32));
}

// Crear CSRF token
$_SESSION['token'] = hash_hmac('sha256', session_id(), $_SESSION['key']);

// Cargar librerías
require_once 'config/config.php';

// Autoload para cargar las clases
spl_autoload_register(function($className){
    require_once 'libs/'. $className .'.php';
});