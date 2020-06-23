<?php

  class LoginModel {
    private $db;

    public function __construct() {
      $this->db = new DB;
    }

    public function checkUser($data)
    {
      /* 
        Looking for a password that matches the username or email address entered
      */
      $this->db->query('SELECT password FROM users WHERE :nickname IN (nickname, email)');
      $this->db->bind(':nickname', $data['nickname']);
      $result = $this->db->allRegisters();

      /* 
        If no results are found, the user does not exist in the database
      */
      if(count($result) <= 0){
        return false;
      };
      /* 
        If a result is found, the password entered by the user is compared to the password hash
        In addition, user login attempts are increased by 1
      */
      if(!password_verify($data['password'], $result[0]->password)){
        $_SESSION['strikes'] += 1;
        return false;
      }

      /*
        The token is removed to generate a new one
      */
      unset($_SESSION['token']);
      return true;
    }
    
  }