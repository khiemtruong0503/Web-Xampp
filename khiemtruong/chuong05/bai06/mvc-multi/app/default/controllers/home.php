<?php
require_once APP_PATH . '/app/config/controller.php';
class Home extends Controller{
	public function index(){
		echo $this->db->getValue() . "</br>";

		$this->view->data1 = 123;
		$this->view->data2 = 456;

		$this->view->render("home/index");
	}

	public function news(){
		echo $this->view->moduleName . " - Home - news";
	}

	public function detailNews($id){
		echo $this->view->moduleName . " - Home - detailnews" . $id;
	}
}