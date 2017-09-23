<?php

namespace libs;

class Controller {
	public $viewObject;
	public function __construct(){
		if(method_exists($this, "init")){
			$this->init();
		}
		$this->viewObject = new View;
	}

	public function display($fileName=''){
	
		// 获取得到模板路径
		if(empty($fileName)){

			$c = Router::getInstance()->controller;
			$a = Router::getInstance()->action;

			$fileName = strtolower($c).DS.strtolower($a).'.php';
		}
		
		$this->viewObject->display($fileName); 
	}

	public function assign($key,$value=''){
		$this->viewObject->assign($key,$value);
	}



}