<?php
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'YiiCMS v1.0',
	'language'=>'zh_cn',
	// preloading 'log' component
	'preload'=>array('log'),
	'viewPath'=>'views',
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'urlSuffix'=>'.html', 
			'showScriptName'=>true,
			'rules'=>array(
				'article/index/<cid:\d+>'=>'article/index',
        		'article/<id:\d+>'=>'article/view',
        		'article/anli/<cid:\d+>'=>'article/anli',
        		'anli/<id:\d+>'=>'article/alview',
        		'article/blog/<cid:\d+>'=>'article/blog',
        		'blog/<id:\d+>'=>'article/bview',
        		'baike/<id:\d+>'=>'article/bkview',
        		'article/about/<id:\d+>'=>'article/about',
        		'product/index/<cid:\d+>'=>'product/index',
        		'product/<id:\d+>'=>'product/view',
        	),
		),
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/db_magnet.db',
			'tablePrefix'=>'mt_',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
                	'class'=>'CFileLogRoute', 
					'levels'=>'error, warning',
           	 	),
//           	 	array(
//                    'class' => 'CWebLogRoute',
//					  'levels'=>'trace,info,error, warning',
//                ),
			),
		),
	),
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__) . '/params.php'),
	//'onBeginRequest'=>create_function('$event', 'return ob_start("ob_gzhandler");'),
	//'onEndRequest'=>create_function('$event', 'return ob_end_flush();'),
);