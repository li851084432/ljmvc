<?php
// 全局配置
$db = require('database.inc.php');
$config = array(

	'weixin'=>[
		'token'=>'xqhero2',
		'appid'=>'',
		'appsecret'=>'',
	],
	'enableCacheFile'=>false,
	'cacheLifeTime'=>0,

	'templateParseStr'=>[
		'CSSPATH'=>__STATIC__.'css'.DS,
		'JSPATH'=>__STATIC__.'js'.DS,
		'LAYOUTS'=>VIEWS.'layouts'.DS,
	]
);
return array_merge($db,$config);