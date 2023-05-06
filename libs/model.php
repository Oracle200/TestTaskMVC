<?php

class Model {
	
	public function __construct() {
		//echo 'Провеверка модели';
		$this->DataBase = new Database();
		//var_dump($this->DataBase);
	}
}