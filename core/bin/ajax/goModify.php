<?php

  $db = new Conexion();
  $HTML = false;

  		$id_empresa= $db->real_escape_string($_POST['id']);
		$Empresa =  $db->real_escape_string($_POST['txtEmpresa']);
		$gerente =	$db->real_escape_string($_POST['txtGerente']);
		$correo	 =	$db->real_escape_string($_POST['txtCorreo']);
echo $id_empresa,$Empresa,$gerente,$correo;
		
		$HTML = false;
		$sql = $db->query("UPDATE tbl_empresa SET descripcion='$Empresa',colaborador='$gerente',correo='$correo' WHERE id_empresa = $id_empresa");
		echo ("UPDATE tbl_empresa SET descripcion='$Empresa',colaborador=$gerente,correo=$correo WHERE id_empresa = $id_empresa");
		if($db->affected_rows>0){
        	echo 'bien';
        } 
        else {
           echo 'error';
        }
	
 

?>