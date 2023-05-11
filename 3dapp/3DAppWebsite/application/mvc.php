<?php
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';

$pageURI =$_SERVER['REQUEST_URI'];
$pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);
	if (!$pageURI)
		new Controller('home');
	else
		if(isset($_GET['view']))
			new Controller($_GET['view']);
		else
		 	new Controller($pageURI);
?>