<?php 
define("APP_PATH", realpath('.'));

if(isset($_GET['page'])){
	// get page
	$pageName = $_GET['page'];

	$pageFile = APP_PATH . '/' . $pageName . '.php';
	if(file_exists($pageFile)){
		require_once $pageFile;
	}
}

