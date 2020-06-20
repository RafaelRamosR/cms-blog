<?php
require_once 'MainModel.php';

class Blog extends MainModel {

	public function __construct() {
		parent::__construct();
	}

	public function obtenerCategorias() {
		$db = new MainModel();
		$query = "SELECT * FROM categorias ORDER BY categoria";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function guardarPublicacion($datos) {
		$db = new MainModel();
		try {
			$insertar = $db->insert('articulos', $datos);
			if ($insertar == true) {
				$_SESSION['mensaje'] = 'Artículo publicado';
			}
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

	public function mostrarArticulos($tipo, $limite) {
		$db = new MainModel();
		$query = "SELECT articulos.*, usuarios.apodo, categorias.categoria FROM articulos
							LEFT JOIN usuarios ON usuarios.id = articulos.publicado_por
							LEFT JOIN categorias ON categorias.id = articulos.id_categoria";
		if ($tipo == 'r') {
			$query.=" WHERE tipo = 'r' ";
		} else if ($tipo == 'p'){
			$query.=" WHERE tipo = 'p' ";
		}

		$query .= " ORDER BY fecha_creacion LIMIT ".$limite;

		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function buscarArticulos($cadena, $limite) {
		$db = new MainModel();
		$query = "SELECT articulos.*, usuarios.apodo, categorias.categoria FROM articulos
							LEFT JOIN usuarios ON usuarios.id = articulos.publicado_por
							LEFT JOIN categorias ON categorias.id = articulos.id_categoria
							WHERE titulo LIKE '%".$cadena."%'";

		$resultado = $this->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerArticulo($slug) {
		$db = new MainModel();
		$query = "SELECT articulos.*, usuarios.apodo, categorias.categoria FROM articulos
							LEFT JOIN usuarios ON usuarios.id = articulos.publicado_por
							LEFT JOIN categorias ON categorias.id = articulos.id_categoria
							WHERE slug = '".$slug."'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerIdArticulo($slug) {
		$db = new MainModel();
		$query = "SELECT id FROM articulos WHERE slug = '".$slug."'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function guardarComentario($datos) {
		$db = new MainModel();
		try {
			$insertar = $db->insert('comentarios', $datos);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function obtenerComentarios($id_articulo) {
		$db = new MainModel();
		$query = "SELECT * FROM comentarios
				  LEFT JOIN usuarios ON usuarios.id = comentarios.id_usuario
				  WHERE id_articulo = '".$id_articulo."'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

}
