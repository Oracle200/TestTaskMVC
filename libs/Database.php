<?php

class Database extends mysqli{

	public function __construct() {
		parent::__construct(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	}
	
}