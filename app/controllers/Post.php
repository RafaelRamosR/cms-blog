<?php

    class Post extends Controller {
        public function __construct()
        {
          
        }

        public function index($slug = "")
        {
          if($slug !== ""){
            $data = [
              'slug' => $slug
            ];
            $this->view('pages/post', $data);
          }else{
            echo "ERROR POST NO ENCONTRADO";
          }
        }

        public function write($slug = "")
        {
          if($slug !== ""){
            $data = [
              'slug' => $slug
            ];
            $this->view('pages/postWrite', $data);
          }else{
            echo "ERROR POST NO ENCONTRADO";
          }
        }
    }