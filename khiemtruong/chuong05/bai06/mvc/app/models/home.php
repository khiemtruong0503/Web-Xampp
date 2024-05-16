<?php
require_once APP_PATH . '/app/config/model.php';

class HomeModel extends Model{
	public function getValue(){
		return "Model Value";
	}
}