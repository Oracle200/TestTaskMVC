<?php

class ViewGrades_Model extends Model {

	public function __construct() {
		parent:: __construct();
	}

	public function viewGrades(){
		if (Session::get('status') === 'student') {
			$user = Session::get('username');
			$sql = "SELECT id, username, algebra, russian_language, Biology, Chemistry, History FROM users WHERE username = '$user'";
		} else {
			$sql = "SELECT id, username, algebra, russian_language, Biology, Chemistry, History FROM users";
		}
		$result = $this->DataBase->query($sql);
		return $result;
	}
}