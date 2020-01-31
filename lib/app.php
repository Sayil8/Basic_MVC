<?php

class App{

	private $url;
	private $controller;


	function __construct(){

		//check if url existis and divide and clean
		if(isset($_GET['url'])){
			$url = rtrim($_GET['url'],'/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
		}
		else
			$url= null;

		//si url vacio entonces llamamos al main
		if(empty($url[0])){
			require 'controller/main.php';
			$controller = new Main();
			$controller->render();
			return false;
		}

		//revisamos si controller existe
		$file = 'controller/'.$url[0].'.php';
		if(file_exists($file))
			require $file;
		else
			$this->error();

		$controller = new $url[0];
		$controller->loadModel($url[0]);


		//exitste parametro, lo ejecutamos con el metodo
		if(isset($url[2])){
			if(method_exists($controller, $url[1]))
				$controller->{$url[1]}($url[2]);
			else
				$this->error();
		}else{
			if(isset($url[1])){
				if(method_exists($controller, $url[1]))
					$controller->{$url[1]}();
				else
					$this->error();

			}
			else
				$controller->render();
		}
		
	}


	function error(){
		require 'controller/err.php';
		$err = new Err();
		exit();
	}



}


?>