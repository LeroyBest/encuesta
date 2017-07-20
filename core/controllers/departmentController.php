<?php

 if(isset($_SESSION['user'])) {
	require ('core/models/class.Department.php');
	$depart  = new Department();


	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		case 'add':
			if($_POST) {
		    	$depart->insertNewCompany();
		    } else {
		    	include(HTML_DIR . 'department/addDepartment.php');
		    }
		break;
		case 'edit':
			if($_POST){
				$depart->listCompany();
			}
			else{
			include(HTML_DIR . 'department/editDepartment.php');
			}
		break;
		default:
		    include(HTML_DIR . 'department/addDepartment.php');
		break;

	}

 } else {
   header('location: ?view=login');
 }	
	
	
	
?>