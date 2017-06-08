<?php
require ('core/models/models.php');

$models = new encuesta();
$db = new connectdb();

$resp =array();

$valida =isset($_GET['mode'])? mysqli_real_escape_string($db, $_GET['mode']) :  "";
//$limit =isset($_GET['a'])? mysqli_real_escape_string($models->connect(), $_GET['a']) :  "";

switch ($valida) {

	
    case "all": {

					$resp=$models->promedioXpreguntas();
					include('views/resultados.php');
                   // return $_PREG;
					
    }break;
    case "criterio": {

					$resp=$models->promedioXcriterios();
					include('views/resultadoscriterio.php');
                   // return $_PREG;
					
    }break;

}

?>