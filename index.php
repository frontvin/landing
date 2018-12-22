<?php 

//
require 'vendor/autoload.php';

// added new Filemanager object
$fileManger = new src\Filemanager();

// added new Router object
$router = new src\Router($fileManger);

// start Router method run()
$router->run();




?>