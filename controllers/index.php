<?php

class Index extends Controller {
	
	public function __construct() {
		parent::__construct();
		Session::init();
		Session::guard();
	}

	public function logout() {
		Session::destroy();
	}

	public function index() {
		$this->view->render('index/index');
	}
}
