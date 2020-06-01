<?php

    class Home extends Controller {
        public function __construct()
        {
            //$this->articleModel = $this->model('NewModelName');
        }

        // método por defecto
        public function index()
        {
            $data = [
                'titulo' => 'Bienvenido a la prueba de MVC'
            ];
            $this->view('pages/home', $data);
        }
    }