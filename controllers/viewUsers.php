<?php


class ViewUsers extends Controller {

	public function __construct() {
		parent::__construct();
		Session::init();
		Session::guard();
	}

	public function index() {

		$this->view->userList = $this->model->viewUsers();
		$this->view->render('viewUsers/index');
	}

	public function deleteInfoID($id){
        $this->model->deleteInfoID($id);
        $this->view->render('viewUsers/index');
    }


}