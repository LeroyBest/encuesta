<?php

session_start();

define('DB_HOST','localhost');
define('DB_USER','UserSurvey');
define('DB_PASS','UserSurvey');
define('DB_NAME','507survey');

define('HTML_DIR','html/');
define('APP_URL','http://'. $_SERVER['SERVER_NAME'].'/demos/encuesta/');



require('core/models/class.Conexion.php');
require('core/models/class.phpmailer.php');
require('core/models/class.smtp.php');
require('core/bin/functions/CorreoTemplate.php');
?>