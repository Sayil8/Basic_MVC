<?php

require_once "config/config.php";
//autoload all clases from lib folder
spl_autoload_register( function($class){
	require_once "lib/{$class}.php";
});

//initialize the App main page
$app = new App();

?>