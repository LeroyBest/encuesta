<?php

 if(isset($_SESSION['user'])) {
	require ('core/models/class.Unity.php');
	$unity  = new unity();


	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		case 'add':
			if($_POST) {
		    	$unity->insertNewUnity();

		    } else {
		    	$resp =$unity->listCompany();
		    	include(HTML_DIR . 'unity/addUnity.php');
		    }
		break;
		case 'edit':
			if($_POST){
				//$company->listCompany();
			}
			else{
				$resp =$unity->listCompany();
				include(HTML_DIR . 'unity/editUnity.php');
			}
		break;
		default:
		    include(HTML_DIR . 'unity/addUnity.php');
		break;

	}

 } else {
   header('location: ?view=login');
 }	
	
	
	
?>