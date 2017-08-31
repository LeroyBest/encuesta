<?php

 if(isset($_SESSION['user'])) {
	require ('core/models/class.Company.php');
	$company  = new Company();


	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		case 'add':
			if($_POST) {
		    	$company->insertNewCompany();
		    } else {
		    	include(HTML_DIR . 'company/addCompany.php');
		    }
		break;
		case 'edit':
			if($_POST){
				$company->listCompany();
			}
			else{
			include(HTML_DIR . 'company/editCompany.php');
			}
		break;
		default:
		    include(HTML_DIR . 'company/addCompany.php');
		break;

	}

 } else {
   header('location: ?view=login');
 }	
	
	
	
?>