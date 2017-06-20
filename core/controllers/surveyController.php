<?php

 if(isset($_GET['eval']) && isset($_GET['sn'])) {
	 
  require('core/models/class.Survey.php');
  $survey = new Survey();

	isset($_SESSION['limit'])? $_SESSION['limit'] :  $_SESSION['limit']= 0;

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'list':
      if($_POST) {
		$survey->insertaestudio();

      } else {

		if($survey->encuestaValida()){ 
			include(HTML_DIR . 'survey/completed.php');
		}else{
			$preg=$survey->cantidadPreguntas();
			$cant=$_SESSION['limit']+QUANTITY_QTS;
			$resp=$survey->preguntas($_SESSION['limit'],QUANTITY_QTS);
			include(HTML_DIR . 'survey/survey.php');
		}

      }
    break;
    default:
      include(HTML_DIR . 'error/error.php');
    break;
  }
 } else {
   header('location: ?view=error');
 }
?>