<?php

class Session {

	public function __construct() {
		session_start();
	}
	
	public function setLevel($value) {
		$_SESSION['level'] = $value;
	}
	
	public function getLevel() {
		return $_SESSION['level'];
	}
}

?>