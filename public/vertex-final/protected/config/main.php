<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	'behaviors'=>array(
	'runEnd'=>array(
	'class'=>'application.components.WebApplicationEndBehavior')),


	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		
	    'MultiMailer' => array(
            'class'             => 'ext.MultiMailer.MultiMailer',
            'setFromAddress'    => 'suhask2107.com',
            'setFromName'       => 'vertex',
          /*  'setMethod'         => 'GMAIL',
            'setOptions'        => array(
				'SMTPDebug'	=>0,
				'Port'		=>25,
				'Host'		=>'smtp.infoholicresearch.com',
				'SMTPAuth'	=>true,
				'isSMTP'	=>true,
				'SMTPSecure'=>'ssl',
				'CharSet'   => 'UTF-8',
                'Username'  => 'vertextechnosysinfo@gmail.com',
                'Password'  => 'Vertex02sept13',
            ),*/
        ),
		 'widgetFactory'=>array(
			'class'=>'CWidgetFactory',					 
            'widgets'=>array(
				'CGridView'=>array(
					'htmlOptions'=>array('class'=>'table table-hover table-striped table-bordered table-condensed'),
					),
				'CDetailView'=>array(
					'htmlOptions'=>array('class'=>'table table-hover table-striped table-bordered table-condensed'),
					),
				),
			), 
		
		
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
				'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=vertexte_vertex1',
			'emulatePrepare' => true,
			'username' => 'vertexte_vertex',
			'password' => 'PHrdAQ8luVWM',
			'charset' => 'utf8',
		),
		
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
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);