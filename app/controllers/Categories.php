<?php

    class Categories extends Controller {
        public function __construct()
        {
          
        }

        public function index($categoryName = "")
        {
          if($categoryName !== ""){
            $data = [
              'category' => $categoryName
            ];
            $this->view('pages/categoriesResult', $data);
          }else{
            $this->view('pages/categories');
          }
        }
    }