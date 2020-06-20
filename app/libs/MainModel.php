<?php
require_once '../app/libs/DB.php';

class MainModel extends DB
{
  public $db;
  public $string;

  public function __construct()
  {
    $this->db = new DB();
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  }

  public function insert($table, $datos)
  {
    try {
      $keys = array_keys($datos);
      $sql = "INSERT INTO $table (" . implode(", ", $keys) . ") \n";
      $sql .= "VALUES ( :" . implode(", :", $keys) . ")";
      $pst = $this->db->prepare($sql);
      return $pst->execute($datos);
    } catch (PDOException $e) {
      $_SESSION['message'] = $e->getMessage();
    } catch (Exception $e) {
      $_SESSION['message'] = $e->getMessage();
    }
  }

  public function consultarRegistro($query)
  {
    try {
      $consulta = $this->db->query($query);
      if ($consulta->rowCount() == 1) {
        return $consulta;
      } else {
        return false;
      }
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }

  public function obtenerTodos($query)
  {
    try {
      return $this->db->query($query);
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}
