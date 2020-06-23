<?php
  require_once ROUTE_APP . '/helpers/hash_helper.php';

  class Login extends Controller {
    public function __construct() {
      $this->loginModel = $this->model('LoginModel');
    }

    public function index()
    {
      $this->view('login');
    }

    public function check_login()
    {
      // Once the login button is sent
      if (isset($_POST['btn-login'])) {
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
          'password' => trim($_POST['password'])
        ];
        
        /*
          The data is sent to the login model to authenticate the user
        */
        if($this->loginModel->checkUser($data)){
          header('location:/cms/home');
        }else{
          echo "Mensaje de error";
        }
      }
    }

  }