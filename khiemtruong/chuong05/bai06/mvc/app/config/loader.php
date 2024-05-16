<?php
require_once APP_PATH . '/app/config/router.php';
class Loader{
	private $controllerName;
	private $actionName;
	private $routers = [];
	private $urlParams = [];

	function __construct(){
		$this->setRouter();
		$this->mapURL();

		// if(isset($_GET['controller'])){
		// 	// get controller, action
		// 	$this->controllerName = $_GET['controller'];
		// 	if(isset($_GET['action'])){
		// 		$this->actionName = $_GET['action'];
		// 	}
		// 	else{
		// 		$this->actionName = "index";
		// 	}
		// }
		// else{
		// 	$this->controllerName = "index";
		// 	$this->actionName = "index";
		// }
	}

	public function load(){
		// load controller, action
		$controllerFile = APP_PATH . '/app/controllers/' . $this->controllerName . ".php";
		if(file_exists($controllerFile)){
			require_once $controllerFile;
			$controller = new $this->controllerName;
			if(method_exists($controller, $this->actionName)){
				$controller->loadModel($this->controllerName);

				// $controller->{$this->actionName}();

				call_user_func_array(
					[$controller, $this->actionName], 
					$this->urlParams
				);
			}
			else{
				$this->notFound();
			}
		}
		else{
			$this->notFound();
		}
	}
	public function notFound(){
		require_once APP_PATH . '/app/controllers/errors.php';
		$errors = new Errors();
		$errors->notFound();
	}

	private function mapURL(){
		$method = $_SERVER['REQUEST_METHOD'];
		$url = $_GET['url'];
		
		$url = rtrim($url, '/');

		$url = ($url == 'index.php') ? '/' : ('/' . $url);

		foreach($this->routers as $router){
			if($method == $router['method']){
				$flagMapURL = false;
				if($url == $router['url']){
					$flagMapURL = true;
				}
				else{
					$urlParams = explode('/', $url);
					$routerParams = explode('/', $router['url']);

					if(count($urlParams) == count($routerParams)){
						$flagMapParams = false;
						foreach ($urlParams as $key => $urlParam) {
							if(preg_match('/^{\w+}$/', $routerParams[$key])){
								// lưu giá trị tham số lại
								$this->urlParams[] = $urlParam;
								$flagMapParams = true;
							}
							else{
								if($urlParam == $routerParams[$key]){
									$flagMapParams = true;
								}
								else{
									$flagMapParams = false;
									break;
								}
							}
						}
						
						if($flagMapParams){
							$flagMapURL = true;
						}
					}
				}
			}

			if($flagMapURL){
				$this->controllerName = $router['routing']['controller'];
				$this->actionName = $router['routing']['action'];
				break;
			}
		}
	}

	private function setRouter(){
		$router = new Router();
		$router->get('/', 
			[
				'controller' => 'home', 
				'action' => 'index'
			]
		);

		$router->get('/tin-tuc', 
			[
				'controller' => 'home', 
				'action' => 'news'
			]
		);
		$this->routers = $router->routers;

		$router->get('/tin-tuc/{id}', 
			[
				'controller' => 'home', 
				'action' => 'detailNews'
			]
		);

		$router->get('/tin-tuc/{p1}/abc/{p2}', 
			[
				'controller' => 'home', 
				'action' => 'testParams'
			]
		);

		$this->routers = $router->routers;
	}
}