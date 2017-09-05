<?php

  $db = new Conexion();
  $HTML = false;
		
		$buscaEmpresa = (isset($_POST['txtbuscarEmpresa']) ? $_POST['txtbuscarEmpresa'] : null);
		$buscaUnidad =(isset($_POST['txtbuscarUnidad']) ? $_POST['txtbuscarUnidad'] : null);

	switch (isset($_POST['seccion']) ? $_POST['seccion'] : null) {
		case 'Empresa':
			
			
			$sql = $db->query("SELECT * FROM tbl_empresa WHERE activo =1");
				
				if($db->rows($sql) > 0) {
					while($data = $db->recorrer($sql)) {
						$HTML[$data['id_empresa']] = $data;
					}
				
				}
				$db->liberar($sql); 
				$db->close(); 
			
		break;
		case 'Unidad':
						
				//$sql = $db->query("SELECT * FROM tbl_unidad WHERE descripcion like '%$buscaUnidad%' and activo =1");
				$sql = $db->query("SELECT *,(select descripcion from tbl_empresa where id_empresa = a.fk_empresa) as empresa
									FROM tbl_unidad a WHERE a.descripcion like '%$buscaUnidad%' and a.activo =1 ");
				
				if($db->rows($sql) > 0) {
					while($data = $db->recorrer($sql)) {
						$HTML[$data['id_unidad']] = $data;
					}
				
				}
				$db->liberar($sql); 
				$db->close(); 
			
		break;
		case 'Departamento':
						
				//$sql = $db->query("SELECT * FROM tbl_unidad WHERE descripcion like '%$buscaUnidad%' and activo =1");
				$sql = $db->query("SELECT * FROM tbl_departamento  WHERE activo =1 ");
				
				if($db->rows($sql) > 0) {
					while($data = $db->recorrer($sql)) {
						$HTML[$data['id_departamento']] = $data;
					}
				
				}
				$db->liberar($sql); 
				$db->close(); 
			
		break;

		default:
			# code...
			break;
	}


		
  header('Content-Type: application/json');
  echo json_encode($HTML);
?>

