<?php
/*  sn -> survey number
	eval -> evaluado
*/
/*
require ('core/models/validaEncuestaModels.php');
require ('core/functions/cifrado.php');

$models = new validaEncuestaModels();
$cifrado= new cifrado();

if(isset($_SESSION['user'])) {

		$idencuesta = isset($_POST['selencuesta']) ? mysqli_real_escape_string(new connectdb(), $_POST['selencuesta']) :  "";
		$departamento= isset($_POST['txtdepartamento']) ? mysqli_real_escape_string(new connectdb(), $_POST['txtdepartamento']) :  "";

		if (isset($_POST['enviarCorreos']) && $_GET['mode']== "enviar"){
			$num =$_POST['numEncuestados'];
			$para;
			$mensaje;
			
			for ($i=0; $i < $num ; $i++) { 
				$para=$_POST['correo'.$i];
				$nombre=$_POST['nombre'.$i];
				
				
				//$mensaje = "http://localhost/encuesta/?view=preguntas&mode=list&sn=".$cifrado ->encodeBase64($idencuesta)."&eval=". md5($para);
				//echo $para." ".$mensaje;
				
					$sn = $cifrado ->encodeBase64($idencuesta);
					$eval = md5($para);
					$link = APP_URL . '?view=preguntas&mode=list&sn='.$sn.'&eval='. $eval;
					$mail = new PHPMailer();	
					$mail->CharSet = "UTF-8";
					$mail->Encoding = "quoted-printable";
					
					$mail->isSMTP();                                      		
					$mail->SMTPDebug    = 1;
					$mail->SMTPAuth = false;                               		
					$mail->Host = "a2plcpnl0416.prod.iad2.secureserver.net"; 
					$mail->Port = 25;                                    		
					$mail->Username = "info@507developers.com";                		
					$mail->Password = "507developers.com";                       		
					$mail->SetFrom("info@507developers.com", "Encuesta");	
					$mail->AddAddress($para); 
					$mail->Subject = 'Deseamos saber su opinión... ';
					$mail->MsgHTML(EmailTemplate($nombre,$link ));
				
				$models->insertaEncuestaValida(md5($para),$departamento,$idencuesta,0);
				//mail($para, 'Mi título', $mensaje);
				$mail->send();
			}
		include('views/envioEncuesta.php');
		}
		else{
			$resp =$models->encuestas();
			include('views/envioEncuesta.php');
		}
}
else
{
header('location: ?view=login');
	
}
*/ 
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
    default:
      include(HTML_DIR . 'send/sendsurvey.php');
    break;
  }
} else {
   header('location: ?view=login');
 }
?>