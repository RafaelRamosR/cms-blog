<?php

    class Categories extends Controller {
        public function __construct()
        {
          
        }

        public function index()
        {
            $this->view('pages/categories');
        }
    }