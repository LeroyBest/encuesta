<?php
/*  sn -> survey number
	eval -> evaluado
*/

require ('core/models/reportesModels.php');
require ('core/functions/cifrado.php');

$models = new reportesModels();
$cifrado= new cifrado();

if(isset($_SESSION['user'])) {

		$idencuesta = isset($_POST['selencuesta']) ? mysqli_real_escape_string(new connectdb(), $_POST['selencuesta']) :  "";
		$departamento= isset($_POST['txtdepartamento']) ? mysqli_real_escape_string(new connectdb(), $_POST['txtdepartamento']) :  "";
		$deficiente=17;
		$bajaExpect=30;
		$bueno=43;
		$excelente=56;
		$resultado = 30;
		$resp="";

		if (isset($_POST['btnmostrarresult']) && $_GET['mode']== "mostrar"){
			$id=1;
			echo "afafa";
			if($resultado == $deficiente){
				$id=1;
				$resp =$models->evaluacion($id);
			}
			else if ($resultado > $deficiente && $resultado<= $bajaExpect ){
				$id=2;
				$resp =$models->evaluacion($id);
				//print_r( $resp);
			}
			else if ($resultado > $bajaExpect && $resultado<= $bueno ){
				$id=3;
				$resp =$models->evaluacion($id);
				print_r( $resp);
			}
			else if ($resultado > $bueno && $resultado<= $excelente ){
				$id=4;
				$resp =$models->evaluacion($id);
				
			}
			
			
		include('views/reportePorDepartamento.php');
		}
		else{
			//$resp =$models->encuestas();
			//$empresa = $models->MuestraEmpresa();
			include('views/reportePorDepartamento.php');
		}
}
else
{
header('location: ?view=login');
	
}


?>