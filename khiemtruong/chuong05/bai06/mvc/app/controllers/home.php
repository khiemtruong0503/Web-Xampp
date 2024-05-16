<?php
require_once APP_PATH . '/app/config/controller.php';
class Home extends Controller{
	public function index(){
		$mess = "hello Home";

		$this->loadModel("home");
		echo $this->db->getValue() . "</br>";

		$this->view->data1 = 123;
		$this->view->data2 = 456;

		$this->view->render("home/index");
	}

	public function news(){
		echo "Home - news";
	}

	public function detailNews($id){
		echo "Home - detailnews" . $id;
	}

	public function testParams($p1, $p2){
		echo "Home -testParams: " . $p1 . " - " . $p2;
	}
}