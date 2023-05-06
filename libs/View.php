<?php

class View {
	public function __construct() {
		//echo 'Провеверка вида';
	}

	public function render($name, $noInclude = false) {
		if ($noInclude == true) {
			require_once 'views/'.$name.'.php';
		} else {
			require_once 'views/header.php';
			require_once 'views/'.$name.'.php';
			require_once 'views/footer.php';
		}
	}

}
