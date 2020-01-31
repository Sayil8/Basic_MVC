<?php

//example with singleton

class Database extends PDO{

	private static $db = null;
	private $conn;
	private $host;
	private $data;
	private $user;
	private $pass;
	private $type;

	private function __construct(){
		$this->host = constant('HOST');
		$this->data = constant('DB');
		$this->user = constant('USER');
		$this->pass = constant('PASS');
		$this->type = constant('BD_TYPE');

		$this->conn = parent::__construct($this->type.":host=".$this->host.";dbname=".$this->data,$this->user,$this->pass);
	}

	//function that allows us to create a Singleton
	public static function getDB(){
		if( self::$db == null){
			self::$db = new Database();
		}

		return self::$db;
	}
	 public function getConnection(){
	 	return $this->conn;
	 }
}


?>