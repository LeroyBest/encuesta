<?php

 if(isset($_SESSION['user'])) {
	require ('core/models/class.Home.php');
	$home  = new Home();

		switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
			case 'question':
				$resp=$result->promedioXpreguntas();
				include(HTML_DIR . 'result/question.php');
			break;
			case 'criterio':
				$resp=$result->promedioXcriterios();
				include(HTML_DIR . 'result/criterio.php');
			break;
			case 'reporte':
				//$resp=$result->promedioXcriterios();
				include(HTML_DIR . 'result/reporte.php');
			break;
	  	}
 } else {
   header('location: ?view=login');
 }	
	
	
	
?>