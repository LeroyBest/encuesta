<?php
/*sn -> survey number
 *
*/
require ('core/models/models.php');
include('core/functions/cifrado.php');
require ('core/models/validaEncuestaModels.php');

$models = new encuesta();
$cifrado = new cifrado();
$verificador = new validaEncuestaModels();

$resp =array();

	$valida =isset($_GET['mode'])? mysqli_real_escape_string(new connectdb(), $_GET['mode']) :  "";
	$limit =isset($_SESSION['a'])? mysqli_real_escape_string(new connectdb(), $_SESSION['a']) :  "";
	$eval =isset($_GET['eval'])? mysqli_real_escape_string(new connectdb(), $_GET['eval']) :  "";
	$sig =isset($_POST['siguiente'])? mysqli_real_escape_string(new connectdb(), $_POST['siguiente']) :  "";
	$enviar = isset($_POST['enviar'])? mysqli_real_escape_string(new connectdb(), $_POST['enviar']) :  "";
	$check1 = isset($_POST['iCheck1'])? mysqli_real_escape_string(new connectdb(), $_POST['iCheck1']) :  "";
	$check2 = isset($_POST['iCheck2'])? mysqli_real_escape_string(new connectdb(), $_POST['iCheck2']) :  "";
	$sn = isset($_GET['sn'])? mysqli_real_escape_string(new connectdb(), $_GET['sn']) :  "";


	if ($check1!=""){

		list($valorresult,$idpreg) = explode("_", $check1);
	}
	if ($check2!=""){

		list($valorresult2,$idpreg2) = explode("_", $check2);
	}


	







switch ($valida) {

	case "list": {

                   if($limit == ""){
						$limit =0;
						$_SESSION['a']=0;
	
					}else if($sig=="siguiente" && $limit!="" && $check1!="" && $check2!=""){

						$models->insertaestudio($idpreg,$eval,$valorresult);
						$models->insertaestudio($idpreg2,$eval,$valorresult2);

						$limit= intval($_SESSION['a']) + 2;
						$_SESSION['a'] = $limit;
						$check1="";
						$check2="";
						
					}else if($enviar=="enviar" && $check1!=""){
						if($check1!=""){
							$models->insertaestudio($idpreg,$eval,$valorresult);
						}
						if($check2!=""){
							$models->insertaestudio($idpreg2,$eval,$valorresult2);
						}

						if ($eval !="" && $sn!=""){	
							echo $verificador->encuestaCompletada($eval,$cifrado->decodeBase64($sn));
						}	
						session_destroy();
						//$limit =0;
						//$_SESSION['a']=0;

					}

		
					if ($eval =="" && $sn==""){
						include('views/page_404.php');
					}
					else if($verificador->encuestaValida($eval,$cifrado->decodeBase64($sn)) == 1){
						$_SESSION['eval']=$eval;
						$_SESSION['sn']=$sn;

						$resp=$models->preguntas($limit,2);
						include('views/encuesta.php');
					}
					else if($verificador->encuestaValida($eval,$cifrado->decodeBase64($sn)) == 2){
						include('views/encuestacompletada.php');
					}
					else
					{

	                   include('views/page_404.php');
					}
					
    }break;
}

?>