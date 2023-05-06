<?php

class CreateUser_Model extends Model {

	public function __construct() {
		parent:: __construct();
		Session::init();
		Session::guard();
	}

	public function createUser($data){
		if (isset($_POST["username"]) && isset($_POST["password"])){
			$username = mysqli_real_escape_string($this->DataBase, trim($data["username"]));
			$password = mysqli_real_escape_string($this->DataBase, password_hash(trim($data["password"]), PASSWORD_DEFAULT));
			$surname = mysqli_real_escape_string($this->DataBase, trim($data["surname"]));
			$firstname = mysqli_real_escape_string($this->DataBase, trim($data["firstname"]));
			$patronymic = mysqli_real_escape_string($this->DataBase, trim($data["patronymic"]));
			$dob = mysqli_real_escape_string($this->DataBase, trim($data["dob"]));

			$sql = "INSERT INTO users (username, password, status, surname, firstname,patronymic, dob) VALUES ('$username', '$password', 'student' ,'$surname', '$firstname', '$patronymic', '$dob')";
			$this->DataBase->query($sql);
			mysqli_close($this->DataBase);
		}
	}
}