<?php
//	error_reporting(E_ALL);
//	ini_set("display_errors", 1);

    $root = $_SERVER['DOCUMENT_ROOT'];
	$lang = $_GET['lang'];
    $title = '';
    $data  = '';

    switch ($lang)
    {
        case '':
            require_once ($root . '/views/Layout_En.php');
            $data['title'] 			= 'Home';
            $data['description'] 	= 'Des';
			$data['keywords'] 		= 'Key';
        break;
        
        case 'es':
        	require_once ($root . '/views/Layout_Es.php');
        	$data['title'] 			= '';
        	$data['description'] 	= '';
        	$data['keywords'] 		= '';
        break;
    }

	$view 		= new Layout_View($data);

	echo $view->printHTMLPage('index');