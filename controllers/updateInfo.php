<?php


class UpdateInfo extends Controller {

	public function __construct() {
		parent::__construct();
		Session::init();
		Session::guard();
	}

	public function updateInfoID($id){
		$this->model->setInfoID($_POST);
		$this->view->userID = $this->model->getInfoID($id);
		$this->view->render('updateInfo/index');
	}

}