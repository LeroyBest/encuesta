<?php

  $db = new Conexion();
  $HTML = false;

		$buscaEmpresa =  $db->real_escape_string($_POST['txtbuscarEmpresa']);

		$HTML = false;
		$sql = $db->query("SELECT * FROM tbl_empresa WHERE descripcion like '%$buscaEmpresa%'");
		
		if($db->rows($sql) > 0) {
			while($data = $db->recorrer($sql)) {
				$HTML[$data['id_empresa']] = $data;
			}
		
		}
		$db->liberar($sql); 
		$db->close(); 
	
  header('Content-Type: application/json');
  echo json_encode($HTML);
?>

