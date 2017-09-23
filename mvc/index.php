<?php
	header('content-type:text/html;charset=utf8');
	define('APP_PATH',PATH_SEPARATOR==';'?str_replace("\\","/",realpath(dirname(__FILE__))):realpath(dirname(__FILE__)));

	define('DS',PATH_SEPARATOR==';'?'/':DIRECTORY_SEPARATOR);
	define('LIBS',APP_PATH.DS.'libs'.DS);
	define('VIEWS',APP_PATH.DS.'views'.DS);
	define('RUNTIME',APP_PATH.DS.'runtime'.DS);
	define('FUNDIR',APP_PATH.DS.'functions'.DS);
	define('__ROOT__',PATH_SEPARATOR==';'?str_replace($_SERVER['DOCUMENT_ROOT'],'',APP_PATH).DS:str_replace(str_replace($_SERVER['PHP_SELF'],'',$_SERVER['SCRIPT_FILENAME']),'',APP_PATH).DS);
	//print_r(__ROOT__);exit;
	define('__STATIC__',str_replace($_SERVER['DOCUMENT_ROOT'],'',__ROOT__.'static'.DS));
//DOCUMENT_ROOT
	//require(LIBS."Error.class.php"); // 错误接管
	require(LIBS."AutoLoader.class.php"); // 实现自动加载
	require(APP_PATH.DS.'config'.DS.'constance.php');
	require(FUNDIR.'common.php');
		
	// 加载配置
	//var_dump($_SERVER['PATH_INFO']);
	if(new AutoLoader()){
		$router = libs\Router::getInstance();
		$controller = $router->getCon();
		$action = $router->getAc();
		// 纯静态
		// 1. 判断一下对应的文件夹下是否存在对应的静态文件，存在的话直接读取并输出

		if($obj = new $controller){
			$obj->$action();
		}else{
			throw(new Exception('对不起，我们这里没有你说的这个mm'));
		}

		
	}else{
		echo "MVC文件加载错误!";
	}