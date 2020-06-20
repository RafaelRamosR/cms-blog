<?php

  class Register {
    private $db;

    public function __construct() {
      $this->db = new DB;//Base;
    }

    public function registerUser($data)
    {
      $this->db->query('INSERT INTO users (nickname, name, lastname, email, password)
      VALUES (:nickname, :name, :lastname, :email, :password)');

      // Vincular valores
      $this->db->bind(':nickname', $data['nickname']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':lastname', $data['lastname']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);

      // Ejecutar
      if($this->db->execute()){
        return true;
      }
      return false;
    }

    public function selectUsers()
    {
      $this->db->query("SELECT * FROM users");
      return $this->db->allRegisters();
    }

    
  }