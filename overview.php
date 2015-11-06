<?php
//	error_reporting(E_ALL);
//	ini_set("display_errors", 1);

    $root = $_SERVER['DOCUMENT_ROOT'];
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
            $data['title'] 			= 'Overview';
            $data['description'] 	= 'Des';
			$data['keywords'] 		= 'Key';
        break;

    }

	$view 		= new Layout_View($data);

	echo $view->printHTMLPage('overview');