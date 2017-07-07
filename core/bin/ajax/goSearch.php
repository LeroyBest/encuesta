<?php

  $db = new Conexion();
  $HTML = false;
		//$buscaEmpresa =  isset($db->real_escape_string($_POST['txtbuscarEmpresa']))?;
		//$buscaUnidad =  $db->real_escape_string($_POST['txtbuscarUnidad']);
		$buscaEmpresa = (isset($_POST['txtbuscarEmpresa']) ? $_POST['txtbuscarEmpresa'] : null);
		$buscaUnidad =(isset($_POST['txtbuscarUnidad']) ? $_POST['txtbuscarUnidad'] : null);

	switch (isset($_POST['seccion']) ? $_POST['seccion'] : null) {
		case 'Empresa':
			if(strlen($buscaEmpresa) < 4){
			$HTML = 0;
			}
			else
			{
			
				$sql = $db->query("SELECT * FROM tbl_empresa WHERE descripcion like '%$buscaEmpresa%' and activo =1");
				
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
			if(strlen($buscaUnidad) < 4){
			$HTML = 0;
			}
			else
			{
			
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
			}
		break;
		default:
			# code...
			break;
	}


		
  header('Content-Type: application/json');
  echo json_encode($HTML);
?>

