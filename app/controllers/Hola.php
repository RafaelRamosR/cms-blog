<?php

    class Hola extends Controller {
        public function __construct()
        {
            //$this->articleModel = $this->model('NewModelName');
        }

        // método por defecto
        public function index()
        {
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $data = $lastname;

            
            if($name){
              echo json_encode($data);
            }
            $this->view('pages/registro', $data);
        }
    }