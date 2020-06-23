<?php

  // Load libraries
  require_once 'config/config.php';
  require_once ROUTE_APP . '/helpers/token_helper.php';

  session_start();
  // CSRF token creation
  if (empty($_SESSION['token'])) {
    $_SESSION['token'] = generateToken();
    $_SESSION['strikes'] = 0;
  }  

  // Autoload to load the main classes
  spl_autoload_register(function($className){
      require_once 'libs/'. $className .'.php';
  });