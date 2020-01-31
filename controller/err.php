<?php

class Err extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->render();
	}

	public function render(){
		$this->view->render('err/index');
	}
}

?>