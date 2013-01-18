<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
$backend=dirname(dirname(__FILE__));
$frontend=dirname($backend);
Yii::setPathOfAlias('backend',$backend);
$frontendArray=require_once($frontend.'/config/main.php');
$backendArray=array(
	'name'=>'网站后台管理系统',
	'basePath'=>$frontend,
    'viewPath'=>$backend.'/views',
	'controllerPath'=>$backend.'/controllers',
    'runtimePath'=>$backend.'/runtime',
	'import'=>array(	
		'application.models.*',
		'application.components.*',
		'application.extensions.upload.*',
	    'backend.models.*',
		'backend.components.*',
	),
	'components'=>array(
		'urlManager'=>array(
			'urlFormat'=>'path',
			'urlSuffix'=>null,
			'showScriptName'=>true, 
			'rules'=>null,
		),

	),
	'params'=>CMap::mergeArray(require($frontend.'/config/params.php'),require($backend.'/config/params.php')),
);
return CMap::mergeArray($frontendArray,$backendArray);