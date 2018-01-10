<?php

if(isset($_SESSION['user'])) {
  require('core/models/class.Send.php');
  $send = new Send();
  $resp =$send->ListaEncuestas();
  

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
   /* case 'enviar':
      if($_POST) {
        $send->EnviarEncuesta();
      } else {
        include(HTML_DIR . 'send/sendsurvey.php');
      }
    break;*/
    case 'ind':
      if($_POST) {
        $send->EnviarEncuesta();
      } else {
        include(HTML_DIR . 'send/sendsurvey.php');
      }
    break;
    case 'enviar':
      if($_POST) {

        if ($_POST['tipo'] == "Empresa"){

        }
        else if($_POST['tipo'] == "Unidad")){

        }
        else if ($_POST['tipo'] == "Departamento")){

        }
        /*SELECT employees.colaborador,employees.correo 
          FROM tbl_empleados employees,tbl_departamento dep, tbl_unidad uni, tbl_empresa emp
          WHERE emp.id_empresa = uni.fk_empresa 
          and uni.id_unidad = dep.fk_unidad
          and dep.id_departamento = employees.fk_departamento
        */
       // $send->EnviarEncuesta();
        echo $_POST['tipo'];
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