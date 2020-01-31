<?php

//dependency injection
class Model{

	function __construct(){
		$this->db = Database::getDB();
	}
}



?>