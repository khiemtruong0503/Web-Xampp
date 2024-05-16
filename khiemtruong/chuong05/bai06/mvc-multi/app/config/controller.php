<?php
class Controller{
	protected $view;
	protected $db;

	function __construct(){
		require_once APP_PATH . '/app/config/view.php';
		$this->view = new View();
	}

	public function loadModel($moduleName, $fileName){
		$filePath = APP_PATH . '/app/' . $moduleName . '/models/' . $fileName . '.php';
		if(file_exists($filePath)){
			require_once $filePath;
			$modelName = $fileName . 'Model';
			$this->db = new $modelName;
			
		}
	}

	public function setView($moduleName){
		$this->view->moduleName = $moduleName;
	}
}