<?php

  class RegisterModel {
    private $db;

    public function __construct() {
      $this->db = new DB;
    }

    public function registerUser($data)
    {
      /*
        SQL query is prepared to enter user data into the database
      */
      $this->db->query('INSERT INTO users (nickname, name, lastname, email, password, remember_token)
      VALUES (:nickname, :name, :lastname, :email, :password, :token)');
      
      /*
        Linking the data
      */
      $this->db->bind(':nickname', $data['nickname']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':lastname', $data['lastname']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':token', $data['token']);

      /*
        SQL query is executed
      */
      if($this->db->execute()){
        return true;
      }
      return false;
    }
  }