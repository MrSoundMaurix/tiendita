<?php 

	
	session_start();
	//session_destroy();


	define('BASEPATH', '/tiendita/');
	define('URL'     , 'https://tienda-1.herokuapp.com/' . BASEPATH);

	define('base_url'     , 'https://tienda-1.herokuapp.com/' . BASEPATH . 'index.php');


	/* Constantes para los archivos */
	define('DS' , DIRECTORY_SEPARATOR);
		// Ruta principal del directorio
		define('ROOT'      , getcwd()          . DS);
		define('APP'       , ROOT . 'app'      . DS);
		define('INCLUDES'  , ROOT . 'includes' . DS);
		define('VIEWS'     , ROOT . 'views'    . DS);


	define('ASSETS'          , URL    . 'assets/');
		define('CSS'         , ASSETS . 'css/');
		define('IMAGES'      , ASSETS . 'images/');
			define('AVATARS' , IMAGES . 'avatars/');
			define('BANNERS' , IMAGES . 'banners/');
			define('ITEMS'   , IMAGES . 'items/');
			define('LARGE'   , IMAGES . 'items/large/');
			define('LOGOS'   , IMAGES . 'logos/');
		define('JS'          , ASSETS . 'js/');
		define('WAITME'      , ASSETS . 'waitMe/');
		define('ALERTIFY'    , ASSETS . 'alertify/');


	include 'conexion.php';
	include 'functions.php';