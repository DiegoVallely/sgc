<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Sistema de Gerenciamento Condominial',

	'theme' => 'bootstrap',
        
 
    
    'sourceLanguage'=>'pt',
  //      'theme'=>'abound',
	// preloading 'log' component
        'preload'=>array('log'),
        
    
    'language'=>'pt',
        
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.modules.srbac.controllers.SBaseController',
        'ext.bootstrap-theme.widgets.*',
        'ext.bootstrap-theme.helpers.*',
        'ext.bootstrap-theme.behaviors.*',
	),
        
	'modules'=>array(
             'srbac' => array(
	            'userclass'=>'Usuario', //default: User
	            'userid'=>'id_usuario', //default: userid
	            'username'=>'nome_usuario', //default:username
	            'delimeter'=>'@', //default:-
	            //'debug'=>true, //default :false
	            'pageSize'=>10, // default : 15
	            'superUser' =>'Authority', //default: Authorizer
	            'css'=>'srbac.css', //default: srbac.css
	            'layout'=>
	            'application.views.layouts.main', 
	            'notAuthorizedView'=> 
	            'srbac.views.authitem.unauthorized', 
	            'alwaysAllowed'=>array( 
	            	'SiteLogin', 
	            	'SiteLogout',
	            	'SiteIndex', 
	            	'SiteError',
	            ),
	            'userActions'=>array(
	            	'Show',
	            	'View',
	            	'List',
	            ), 
	            'listBoxNumberOfLines' => 15, //default : 10
	            'imagesPath' => 'srbac.images', 
	            // default: srbac.images
	            'imagesPack'=>'noia', //default: noia
	            'iconText'=>true, // default : false
	            'header'=>'srbac.views.authitem.header', 
	            'footer'=>'srbac.views.authitem.footer', 
	            'showHeader'=>true, // default: false
	            'showFooter'=>true, // default: false
	            'alwaysAllowedPath'=>'srbac.components', 
            ), 

            'cal' => array(
           // 'debug' => true // For first run only!
            ),
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'yiisgc',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'newFileMode'=>0666,
                        'newDirMode'=>0777,
            'generatorPaths' => array(
            		'ext.bootstrap-theme.gii',
            	),
		),
		
	),
       

	// application components
	'components'=>array(
		'usuario'=>array(
                    'class' => 'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            ),
		  'authManager' => array(
                'class' => 'application.modules.srbac.components.SDbAuthManager',
                'connectionID' => 'db',
                'assignmentTable' => 'auth_assignment',
                'itemTable' => 'auth_item',
                'itemChildTable' => 'auth_item_child',
               ),
                    
                    
                 
		// uncomment the following to enable URLs in path-format
		
		//'urlManager'=>array(
		//	'urlFormat'=>'path',
		//	'rules'=>array(
		//		'<controller:\w+>/<id:\d+>'=>'<controller>/view',
		//		'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
		//		'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
		//	),
		//),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sgc',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
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


