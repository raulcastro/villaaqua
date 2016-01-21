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
        case 'es':
            require_once ($root . '/views/Layout_Es.php');
            $data['title'] = 'Inicio';
            $data['description'] = 'Alvelais & Asociados, ofrece servicios legales de la más alta calidad en el ámbito de los negocios, gracias a un equipo de abogados calificados y profesionales.';
			$data['keywords'] = 'Alvelais & Asociados, Bufete de Abogados, Playa del Carmen, Negocios, Abogados, Derecho Playa del Carmen';
        break;

        case '':
            require_once ($root . '/views/Layout_En.php');
            $data['title'] 			= 'The Rooms';
            $data['description'] 	= 'Des';
			$data['keywords'] 		= 'Key';
        break;

    }

    $info 		= $backend->loadBackend('the-rooms');
    array_push($data, $info);
    
	$view 		= new Layout_View($data);

	echo $view->printHTMLPage('the-rooms');