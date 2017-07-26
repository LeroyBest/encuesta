<?php

session_start();

define('DB_HOST','localhost');
define('DB_USER','UserSurvey');
define('DB_PASS','UserSurvey');
define('DB_NAME','507survey');

define('HTML_DIR','html/');
define('APP_URL','http://'. $_SERVER['SERVER_NAME'].'/demos/encuesta/');

define('QUANTITY_QTS',5);

require('core/models/class.Conexion.php');
require('core/models/class.phpmailer.php');
require('core/models/class.smtp.php');
require('core/bin/functions/CorreoTemplate.php');
require('core/bin/functions/Cifrado.php');
require ('core/bin/functions/separadorCorreos.php');
?>