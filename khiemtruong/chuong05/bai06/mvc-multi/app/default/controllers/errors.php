<?php
require_once APP_PATH . '/app/config/controller.php';

class Errors extends Controller{
	public function notFound(){
		echo "Not Found";
	}
}