<?php


class Login_Model extends Model{
	
	function __construct(){
		parent::__construct();
	}

	public function login($data){
		try{

			$std = $this->db->prepare("SELECT * FROM users WHERE login = :name AND password = :pass");
			$std->execute(array(
				':name' => $data['name'],
				':pass' => $data['pass']

			));

			$result = $std->fetch();
			$count = $std->rowCount();

			if($count > 0){
				//sesion value login true
				echo $result['id'];
				
				return true;
			}
			else
				return false;

		}catch(PDOException $e){
			echo $e;
			return false;
		}
	}

}


?>