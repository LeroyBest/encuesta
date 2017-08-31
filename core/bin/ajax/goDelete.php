<?php

  $db = new Conexion();
  $HTML = false;

  		
		
switch (isset($_POST['seccion']) ? $_POST['seccion'] : null) {
  case 'Empresa':
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
    break;
  
  case 'Unidad':
      $id_unidad= $db->real_escape_string($_POST['id']);
          $HTML = false;
          $sql = $db->query("UPDATE tbl_unidad SET activo = 0 WHERE id_unidad = $id_unidad");
          //echo ("UPDATE tbl_empresa SET descripcion='$Empresa',colaborador=$gerente,correo=$correo WHERE id_empresa = $id_empresa");
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