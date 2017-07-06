<?php

 if(isset($_SESSION['user'])) {
	require ('core/models/class.Unity.php');
	$unity  = new unity();


	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		case 'add':
			if($_POST) {
		    	$unity->insertNewUnity();
		    } else {
		    	include(HTML_DIR . 'unity/addUnity.php');
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