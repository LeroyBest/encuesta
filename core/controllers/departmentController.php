<?php

 if(isset($_SESSION['user'])) {
	require ('core/models/class.Department.php');
	
	$depart  = new Department();
	


	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		case 'add':
			if($_POST) {
		    	$retorna =$depart->insertNewDepartment();
		    	//include(HTML_DIR . 'department/addDepartment.php');
		    	/*if(!empty($_POST['taCorreos'])){
		    		$depart->insertColaboradores();
		    		
		    	}*/
		    } else {
		    	$resp=$depart->listUnity();
		    	
		    	include(HTML_DIR . 'department/addDepartment.php');
		    }
		break;
		case 'edit':
			if($_POST){
				$resp = $depart->listDepartment();
				include(HTML_DIR . 'department/editDepartment.php');
			}
			else{
				$resp = $depart->listDepartment();
				include(HTML_DIR . 'department/editDepartment.php');
			}
		break;
		case 'in':
			if($_POST){
				$depart->insertColaboradores();;
				include(HTML_DIR . 'department/inscribirColaboradores.php');
			}
			else{
				$resp = $depart->listCompUnitDepartment();
				include(HTML_DIR . 'department/inscribirColaboradores.php');
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