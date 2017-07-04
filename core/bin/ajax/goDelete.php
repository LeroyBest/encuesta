<?php

  $db = new Conexion();
  $HTML = false;

  		$id_empresa= $db->real_escape_string($_POST['id']);
		

		
		$HTML = false;
		$sql = $db->query("UPDATE tbl_empresa SET activo = 0 WHERE id_empresa = $id_empresa");
		//echo ("UPDATE tbl_empresa SET descripcion='$Empresa',colaborador=$gerente,correo=$correo WHERE id_empresa = $id_empresa");
		if($db->affected_rows>0){
        	echo 1;
        } 
        else {
        	echo 0;
        }
	
 

?>