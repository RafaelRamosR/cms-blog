<?php
require_once ROUTE_APP . '/helpers/hash_helper.php';
  class Registro extends Controller {
    public function __construct() {
      $this->register = $this->model('Register');
    }

    public function index()
    {
      $users = $this->register->selectUsers();
      $data = [
        'users' => $users
      ];
      $this->view('registro', $data);
    }

    public function register()
    {
      if (isset($_POST['btn-register'])) {
        $data = [
          'nickname' => trim($_POST['nickname']),
          'name' => trim($_POST['name']),
          'lastname' => trim($_POST['lastname']),
          'email' => trim($_POST['email']),
          'password' => generate_hash(trim($_POST['password']))
        ];
        
        if($this->register->registerUser($data)){
          header('location:' . ROUTE_URL . 'registro');
        }else{
          echo "Mensaje de error";
        }
      }
    }

  }