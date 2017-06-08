<?php

/* ms --> my survey
*/
	require ('core/models/homeModels.php');
	$models  = new home();


	if(isset($_SESSION['user'])) {

		$valida =isset($_GET['mode'])? mysqli_real_escape_string(new connectdb(), $_GET['mode']) :  "";

			switch ($valida) {

				
			    case "ms": {

								$resp = $models->misEncuestas();
								include('views/home.php');
								
			    }break;
			    
			}

	
	}
	else
	{
		header('location: ?view=login');
	}

?>