<?php

session_start();

define('DB_HOST','localhost');
define('DB_USER','UserSurvey');
define('DB_PASS','UserSurvey');
define('DB_NAME','507survey');

define('APP_URL','http://'. $_SERVER['SERVER_NAME'].'/demos/encuesta/');

//define('APP_URL','http://localhost/encuesta/');
//define('APP_URL','http://507developers.com/demos/encuesta/');

require('core/models/connectdb.php');
require('core/models/class.phpmailer.php');
require('core/models/class.smtp.php');
require('core/functions/CorreoTemplate.php');
?>