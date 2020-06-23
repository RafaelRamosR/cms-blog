<?php
  require_once ROUTE_APP . '/helpers/hash_helper.php';
  
  class Registro extends Controller {
    public function __construct() {
      $this->register = $this->model('RegisterModel');
    }

    public function index()
    {
      $this->view('registro');
    }

    public function register()
    {
      // Once the register button is sent
      if (isset($_POST['btn-register'])) {
        /*
          Verify that the token sent is the same as the user's temporary token
          and the maximum limit of attempts has not been exceeded
        */
        if (!hash_equals($_SESSION['token'], $_POST['token']) || $_SESSION['strikes'] >= 3) {
          echo "Mensaje de actividad sospechosa, superó el limite de intentos.";
          return;
        }

        $data = [
          'nickname' => trim($_POST['nickname']),
          'name' => trim($_POST['name']),
          'lastname' => trim($_POST['lastname']),
          'email' => trim($_POST['email']),
          'password' => generate_hash(trim($_POST['password'])),
          'token' => trim($_POST['token'])
        ];

        /*
          The data is sent to the register model to register the user
        */
        if($this->register->registerUser($data)){
          header('location:' . ROUTE_URL . 'registro');
        }else{
          echo "Mensaje de error";
        }
      }
    }

  }