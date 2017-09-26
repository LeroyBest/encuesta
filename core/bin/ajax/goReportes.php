<?php

  $db = new Conexion();
  $HTML = false;
		
		$buscaEmpresa = (isset($_POST['txtbuscarEmpresa']) ? $_POST['txtbuscarEmpresa'] : null);
		$buscaUnidad =(isset($_POST['txtbuscarUnidad']) ? $_POST['txtbuscarUnidad'] : null);
		$departamento =(isset($_POST['nombre']) ? $_POST['nombre'] : null);
		

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
					$sql = $db->query("SELECT  count(distinct valida.cadena) cantidad, sum(valores_estudio) sumaValores FROM tbl_estudio estudio, tbl_encuesta_valida valida WHERE estudio.cliente = valida.cadena  and valida.departamento = $departamento");

					if($db->rows($sql) > 0) {
						while($data = $db->recorrer($sql)) {
							$HTML[$data['cantidad']] = $data;
						}
					
					}
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

