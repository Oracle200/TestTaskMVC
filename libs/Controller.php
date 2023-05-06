<?php


class Controller {

	public function __construct() {
		//echo 'Провеверка контроллера';
		$this->view = new View();

	}

	public function loadModel($name) {
		$path = 'models/'.$name.'_model.php';
		//echo $path;
		if(file_exists($path)) {
			require_once 'models/'.$name.'_model.php';
			$modelName = $name.'_Model';
			$this->model = new $modelName();
		}
	}
}