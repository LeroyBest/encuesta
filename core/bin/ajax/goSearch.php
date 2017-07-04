<?php

  $db = new Conexion();
  $HTML = false;

		$buscaEmpresa =  $db->real_escape_string($_POST['txtbuscarEmpresa']);

		$HTML = false;

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
  header('Content-Type: application/json');
  echo json_encode($HTML);
?>

