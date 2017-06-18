<?php

 if(isset($_SESSION['user'])) {
	require ('core/models/class.Home.php');
	$home  = new Home();
 	if(isset($_GET['mode']))
 	{
 		include(HTML_DIR . 'company/newCompany.php');
 	}
 	else
		include(HTML_DIR . 'company/company.php');
		//$resp = $home->misEncuestas();

 } else {
   header('location: ?view=login');
 }	
	
	
	
?>