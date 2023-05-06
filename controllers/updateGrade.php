<?php


class UpdateGrade extends Controller {

	public function __construct() {
		parent::__construct();
		Session::init();
		Session::guard();
	}

	public function updateFromID($id){
		$this->model->setID($_POST);
		$this->view->userID = $this->model->getID($id);
		$this->view->render('updateGrade/index');
	}

}