<?php

if(isset($_SESSION['user'])) {
  require('core/models/class.Send.php');
  $send = new Send();
  $resp =$send->ListaEncuestas();
  

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'enviar':
      if($_POST) {
        $send->EnviarEncuesta();
      } else {
        include(HTML_DIR . 'send/sendsurvey.php');
      }
    break;
    case 'ind':
      if($_POST) {
        $send->EnviarEncuesta();
      } else {
        include(HTML_DIR . 'send/sendsurvey.php');
      }
    break;
    case 'corp':
      if($_POST) {
        $send->EnviarEncuesta();
      } else {
        include(HTML_DIR . 'send/sendsurveycorporative.php');
      }
    break;

    default:
      include(HTML_DIR . 'send/sendsurvey.php');
    break;
  }
} else {
   header('location: ?view=login');
 }
?>