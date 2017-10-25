<?php

	$db = new Conexion();
	$HTML = false;
	require('core/models/class.Evaluation.php');
		
	$evaluacion  = new Evaluation();		
	$buscaEmpresa = (isset($_POST['txtbuscarEmpresa']) ? $_POST['txtbuscarEmpresa'] : null);
	$buscaUnidad =(isset($_POST['txtbuscarUnidad']) ? $_POST['txtbuscarUnidad'] : null);
	$departamento =(isset($_POST['nombre']) ? $_POST['nombre'] : null);	
	$criterio =array();
		

	switch (isset($_POST['seccion']) ? $_POST['seccion'] : null) {
		case 'Empresa':
			
			if(isset($_POST['generar'])){
					$HTML = false;
			}else{

				$sql = $db->query("SELECT * FROM tbl_empresa WHERE activo =1");
					
					if($db->rows($sql) > 0) {
						while($data = $db->recorrer($sql)) {
							$HTML[$data['id_empresa']] = $data;
						}
					
					}
					$db->liberar($sql); 
					$db->close(); 
					
			}
			
		break;
		case 'Unidad':
						
				if(isset($_POST['generar'])){
					$HTML = false;
				}else{

					//$sql = $db->query("SELECT * FROM tbl_unidad WHERE descripcion like '%$buscaUnidad%' and activo =1");
					$sql = $db->query("SELECT *,(select descripcion from tbl_empresa where id_empresa = a.fk_empresa) as empresa
										FROM tbl_unidad a WHERE  a.activo =1 ");
					
					if($db->rows($sql) > 0) {
						while($data = $db->recorrer($sql)) {
							$HTML[$data['id_unidad']] = $data;
						}
					
					}
					$db->liberar($sql); 
					$db->close(); 
					
				}
			
		break;
		case 'Departamento':
						
				if(isset($_POST['generar'])){
					$HTML = false;
					/*$sql = $db->query("SELECT  count(distinct valida.cadena) cantidad, sum(valores_estudio) sumaValores FROM tbl_estudio estudio, tbl_encuesta_valida valida WHERE estudio.cliente = valida.cadena  and valida.departamento = $departamento");*/

					$sql = $db->query("SELECT count(distinct cliente) cantidad, sum(valores_estudio) sumaValores FROM tbl_estudio WHERE cliente in (SELECT cadena FROM tbl_encuesta_valida where departamento =$departamento)");

					if($db->rows($sql) > 0) {
						while($data = $db->recorrer($sql)) {
							$HTML[] = $data;
						}
					
					}
					
					

					//valida resultado obtenido en la evaluacion
					if($HTML[0]['cantidad'] > 0 && $HTML[0]['sumaValores']!=""){
						$criterioProm = $evaluacion->promedioCriterio($departamento);
						$total = ($HTML[0]['sumaValores']/$HTML[0]['cantidad'])/17;

						switch (floor($total)) {
							case 1:
									foreach ($criterioProm as $key => $value) {
										if($criterioProm[$key]['promedio']< 2){
											$criterio[] = $criterioProm[$key]['criterio'];
										}
									}

								break;

							case 2:
									foreach ($criterioProm as $key => $value) {
										if($criterioProm[$key]['promedio']< 3){
											$criterio[] = $criterioProm[$key]['criterio'];
											//print_r($criterio);
										}
									}	

								break;

							case 3:

									foreach ($criterioProm as $key => $value) {
										if($criterioProm[$key]['promedio']< 3){
											$criterio[] = $criterioProm[$key]['criterio'];
											//print_r($criterio);
										}
									}
								
								break;

							case 4:
								
									foreach ($criterioProm as $key => $value) {
										if($criterioProm[$key]['promedio']< 3){
											$criterio[] = $criterioProm[$key]['criterio'];
											//print_r($criterio);
										}
									}

								break;

							case 5:

									foreach ($criterioProm as $key => $value) {
										if($criterioProm[$key]['promedio']< 3){
											$criterio[] = $criterioProm[$key]['criterio'];
										}
									}
								
								break;
							
							default:
								# code...
								break;
						}


						$preguntasBajas = $evaluacion->criteriosBajos($criterio);
						print_r($preguntasBajas);
						$idCriterio = 0;
						$vineta =0;
						$tercer_resultado = "";


						foreach ($preguntasBajas as $key => $value) {
							//$tercer_resultado= $preguntasBajas[$key]['descripcion'];

							if($idCriterio == $preguntasBajas[$key]['id_criterio']){
								$vineta +=1;
								$tercer_resultado = $tercer_resultado." ".$preguntasBajas[$key]['id_criterio'].".".$vineta." ".$preguntasBajas[$key]['pregunta'];
							}
							else{
								$vineta=0;
								$vineta +=1;
								$idCriterio = $preguntasBajas[$key]['id_criterio'];
								$tercer_resultado=$preguntasBajas[$key]['id_criterio'].") ".$preguntasBajas[$key]['descripcion'];
								$tercer_resultado = $tercer_resultado." ".$preguntasBajas[$key]['id_criterio'].".".$vineta." ".$preguntasBajas[$key]['pregunta'];

							}
						}

echo "tercer_resultado ".$tercer_resultado;

						$HTML[] =$evaluacion->evalResult(floor($total));
						$HTML[] = array("pregunta" => $tercer_resultado);


						//print_r($HTML[2]['pregunta'][1]);

						
					}else{$HTML=false;}
				}else{

					//$sql = $db->query("SELECT * FROM tbl_unidad WHERE descripcion like '%$buscaUnidad%' and activo =1");
					$sql = $db->query("SELECT distinct id_departamento,dep.descripcion,fk_unidad,a.descripcion as unidad,a.fk_empresa,(select descripcion from tbl_empresa where id_empresa = a.fk_empresa) as empresa FROM tbl_departamento dep, tbl_unidad a WHERE dep.fk_unidad = a.id_unidad and dep.activo =1");
					
					if($db->rows($sql) > 0) {
						while($data = $db->recorrer($sql)) {
							$HTML[$data['id_departamento']] = $data;
						}
					
					}
					$db->liberar($sql); 
					$db->close(); 
					
				}	
			
		break;

		default:
			# code...
			break;
	}


		
  header('Content-Type: application/json');
  echo json_encode($HTML);
?>

