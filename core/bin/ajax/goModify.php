<?php

  $db = new Conexion();
  $HTML = false;

  		
	//echo $db->real_escape_string($_POST['seccion']);
	switch (isset($_POST['seccion']) ? $_POST['seccion'] : null) {
		case 'Empresa':
			$id_empresa= $db->real_escape_string($_POST['id']);
			$Empresa =  $db->real_escape_string($_POST['txtEmpresa']);
			$gerente =	$db->real_escape_string($_POST['txtGerente']);
			$correo	 =	$db->real_escape_string($_POST['txtCorreo']);
			echo $id_empresa,$Empresa,$gerente,$correo;
		
			$HTML = false;
			$sql = $db->query("UPDATE tbl_empresa SET descripcion='$Empresa',colaborador='$gerente',correo='$correo' WHERE id_empresa = $id_empresa");
			
			if($db->affected_rows>0){
	        	echo 1;
	        } 
	        else {
	        	echo 0;
	        }
		break;
		case 'Unidad':
			$id_unidad= $db->real_escape_string($_POST['id']);
			$unidad =  $db->real_escape_string($_POST['txtUnidad']);
			$jefe =	$db->real_escape_string($_POST['txtJefe']);
			$correo	 =	$db->real_escape_string($_POST['txtCorreo']);
			//echo $id_empresa,$Empresa,$gerente,$correo;
			
			$HTML = false;
			$sql = $db->query("UPDATE tbl_unidad SET descripcion='$unidad',colaborador='$jefe',correo='$correo' WHERE id_unidad = $id_unidad");
			echo "UPDATE tbl_unidad SET descripcion='$unidad',colaborador='$jefe',correo='$correo' WHERE id_unidad = $id_unidad";
			if($db->affected_rows>0){
	        	echo 1;
	        } 
	        else {
	        	echo 0;
	        }
			break;
		default:
			# code...
			break;
	}




 

?>