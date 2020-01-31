<?php

class Login extends Controller{

	

	function __construct(){
		parent::__construct();
		$this->view->message = "";
	}
	public function render(){
		$this->view->render('login/index');
	}
	public function login(){

		//verificar si isset
		$name = $_POST['name'];
		$pass = $_POST['pass'];

		//verificacion por partes, correo y luego pass

		if($this->model->login(['name' => $name, 'pass' => $pass])){
			echo "hola";
		}
	}

}



?>