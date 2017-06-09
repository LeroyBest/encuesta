<?php

  require('core/models/class.Login.php');
  $login = new Login();

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'validar':
      if($_POST) {
        $login->validaCredenciales();
      } else {
        include(HTML_DIR . 'login/login.php');
      }
    break;
    default:
      include(HTML_DIR . 'login/login.php');
    break;
  }

    
?>