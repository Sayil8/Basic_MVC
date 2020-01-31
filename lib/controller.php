<?php

abstract class Controller{

	function __construct(){
		$this->view = new View();
	}
	function loadModel($name){
		
		$file = 'model/'.$name.'_Model.php';

		if(file_exists($file)){

			require $file;

			$filename = $name.'_Model';
			$this->model = new $filename();	
		}
	}
	abstract protected function render();
}



?>