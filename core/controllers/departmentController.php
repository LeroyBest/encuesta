<?php

 if(isset($_SESSION['user'])) {
	require ('core/models/class.Department.php');
	
	$depart  = new Department();
	


	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		case 'add':
			if($_POST) {
		    	$depart->insertNewDepartment();
		    	//if(isset($_POST['taCorreos'])){
		    //		$depart->insertColaboradores();
		    	//}
		    } else {
		    	$resp=$depart->listUnity();
		    	//$cadena ="asdf,a@a.com; roberto rodriguez,roberto@a.com";
		    	//$as =$separador->separar($cadena);
//print_r($as);
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