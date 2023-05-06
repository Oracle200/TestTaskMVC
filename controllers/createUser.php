<?php


class CreateUser extends Controller {

	public function __construct() {
		parent::__construct();
		Session::init();
		Session::guard();
	}

	public function index() {
		$this->view->render('createUser/index');
	}

	public function createUser() {
		$data = array();
		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];
		$data['surname'] = $_POST['surname'];
		$data['firstname'] = $_POST['firstname'];
		$data['patronymic'] = $_POST['patronymic'];
		$data['dob'] = $_POST['dob'];
		$this->model->createUser($data);
		header("Location: ../createUser");
	}
}