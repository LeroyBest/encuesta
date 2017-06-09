<?php

 if(isset($_SESSION['user'])) {
	require ('core/models/class.Result.php');
	$result  = new Result();
		switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		case 'question':
			$resp=$result->promedioXpreguntas();
			include(HTML_DIR . 'result/question.php');
		break;
		case 'criterio':
			$resp=$result->promedioXcriterios();
			include(HTML_DIR . 'result/criterio.php');
		break;
	  }


 } else {
   header('location: ?view=login');
 }	
	



?>