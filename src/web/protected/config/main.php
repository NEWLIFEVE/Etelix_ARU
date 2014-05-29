<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap/css/bootstrap.css');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'ARU',
	'language'=>'es',
	'timeZone'=>'America/Caracas',
	'charset'=>'utf-8',
	// preloading 'log' component
	'preload'=>array('log','bootstrap'),
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.controllers.*',
	),
	'modules'=>array(),
	// application components
	'components'=>array(
		'user'=>array(
			'allowAutoLogin'=>true,
			),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
//		'log'=>array(
//			'class'=>'CLogRouter',
//			'routes'=>array(
//				array(
//                    'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
//                ),
//				// uncomment the following to show log messages on web pages
//				/*
//				array(
//					'class'=>'CWebLogRoute',
//				),
//				*/
//			),
//		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);