<?php

require_once 'models/admin.php';

class AdminController extends Controller {
	public function __construct()
	{
		//$this->articleModel = $this->model('NewModelName');
	}
	
	public function dashboard() {
		session_start();
		if ($_SESSION['id_rol'] != 1) {
			header('Location: index.php?page=login');
      die();
		} else {
			require_once('./views/includes/header.php');
			require_once('./views/admin/dashboard.php');
			require_once('./views/includes/footer.php');
		}
	}


}