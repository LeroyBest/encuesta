<?php
session_start();

/*include_once('C:/wamp/www/encuesta/complementos/reports/class/tcpdf/tcpdf.php');
include_once("C:/wamp/www/encuesta/complementos/reports/class/PHPJasperXML.inc.php");
include_once ('C:/wamp/www/encuesta/complementos/reports/class/setting.php');*/

include_once('../../complementos/reports/class/tcpdf/tcpdf.php');
include_once("../../complementos/reports/class/PHPJasperXML.inc.php");
include_once ('../../complementos/reports/class/setting.php');
//include 'models.php';
//$connect = new cotizacion();

	
//$connect = new cotizacion();

//Create object that referer a web services 
//$client = new nusoap_client($wsdl,true); 
 
// $connect=mysqli_connect($server,$user,$pass,$db);

//	$numcotiza = isset($_GET['num']) ? mysqli_real_escape_string($connect, $_GET['num']) :  "";
    /*$id_aportacion = isset($_GET['id']) ? mysqli_real_escape_string($connect, $_GET['id']) :  "";
	$id_vivienda = isset($_GET['idv']) ? mysqli_real_escape_string($connect, $_GET['idv']) :  "";*/
	
 
	// $connect->connect();
	  
 			//$xml =  simplexml_load_file("C:/wamp/www/encuesta/complementos/reports/Resultados.jrxml");
 			$xml =  simplexml_load_file("../../complementos/reports/Resultados.jrxml");
	
			//unlink(filename,context)
			$PHPJasperXML = new PHPJasperXML();
			$PHPJasperXML->arrayParameter=array("encuesta" => "'1'");
			$PHPJasperXML->debugsql=false;
			$PHPJasperXML->xml_dismantle($xml);
			$PHPJasperXML->transferDBtoArray('localhost','UserSurvey','UserSurvey','507survey');
			//$PHPJasperXML->outpage('F',$fileNL); //page output method I:standard output D:Download file, F =save as filename and submit 2nd parameter as destinate file name 
			$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file



?>