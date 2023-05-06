<?php


class ViewGrades extends Controller {

	public function __construct() {
		parent::__construct();
		Session::init();
		Session::guard();
	}

	public function index() {
		$this->view->gradeList = $this->model->viewGrades();
		$this->view->render('viewGrades/index');
	}


}