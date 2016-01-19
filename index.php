<?php
//	error_reporting(E_ALL);
//	ini_set("display_errors", 1);
	$root = $_SERVER['DOCUMENT_ROOT'];
	require_once $root.'/'.'backends/general.php';
	
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	
	require_once($root.'/Framework/Mysqli_Tool.php');
	require_once($root.'/Framework/sessionControl.php');
	require_once($root.'/Framework/Connection_Data.php');
	
	$db =  new Mysqli_Tool(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	$control = new sessionControl($db,
			'users',
			'user',
			'password',
			'type',
			$typesPages,
			'index.php',
			0);
	
	$lang = $_GET['lang'];
    $title = '';
    $data  = '';

    switch ($lang)
    {
        case '':
            require_once ($root . '/views/Layout_En.php');
            $data['title'] 			= 'Home';
            $data['description'] 	= 'Villa Aqua is an exclusive 5 bedroom private villa that offers luxurious, spacious and modern accommodations with exceptional and personalized service';
			$data['keywords'] 		= 'Villa Aqua, vacation rental Playa del Carmen, holiday rental Playa del Carmen, luxury property, exclusive villa, Riviera Maya rentals, Playa del Carmen, Playa del Carmen rentals, Playa del Carmen luxury rental, exclusive luxury rental Playa del Carmen”';
        break;
        
        case 'es':
        	require_once ($root . '/views/Layout_Es.php');
        	$data['title'] 			= 'Inicio';
        	$data['description'] 	= 'Villa Aqua es una hermosa villa privada con 5 amplias y modernas habitaciones ofrecen confort y lujo en un ambiente cálido con servicio personalizado';
        	$data['keywords'] 		= 'Villa Aqua, renta vacacional Playa del Carmen, rentas en Playa del Carmen, propiedad de lujo, villa exclusiva, rentas en Riviera Maya, renta de lujo Caribe, renta lujo Mexico, renta privada Playa del Carmen';
        break;
    }
	
    $info 		= $backend->loadBackend('mainSection');
    array_push($data, $info);
    
//     var_dump($data);
    
	$view 		= new Layout_View($data);

	echo $view->printHTMLPage('index');