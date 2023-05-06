<?php

class Login_Model extends Model {

	public function __construct() {
		parent:: __construct();

	}

	public function run() {
		session_start();
		if ($stmt = $this->DataBase->prepare('SELECT id, password, status
											  FROM users WHERE username = ?')) {
			$stmt->bind_param('s', $_POST['username']);
			$stmt->execute();
			$stmt->store_result();
			if ($stmt->num_rows != 0){
				$stmt->bind_result($id, $password, $status);
				$stmt->fetch();
				if(password_verify($_POST['password'], $password)){
					session_regenerate_id();
					Session::init();
					Session::set('loggedIn', true);
					Session::set('username', $_POST['username']);
					Session::set('status', $status);
					header("location: ../index");
				} else {
					echo '<h3 style="background-color: red">Неверный пароль</h3>';
				}
			} else {
				echo '<h3 style="background-color: red">Такого пользователя не существует</h3>';
			}
			$stmt->close();
		}

	}
}
