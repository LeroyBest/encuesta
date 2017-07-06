<?php

class Unity {
	
	private $db;
	private $UnityName;
	private $jefe;
	private $EmailJefe;
	private $Empresa;
  
	public function __construct() {
		$this->db = new Conexion();

	}
	  
	  
	public function insertNewUnity() {
		$this->UnityName = $this->db->real_escape_string($_POST['txtUnidad']);
		$this->jefe = $this->db->real_escape_string($_POST['txtJefe']);
		$this->EmailJefe = $this->db->real_escape_string($_POST['txtEmailJefe']);  
		$this->Empresa = $this->db->real_escape_string($_POST['txtEmpresa']); 
		$resp = false;
		
		$this->db->query("INSERT INTO tbl_unidad SET descripcion='$this->UnityName',colaborador='$this->jefe',correo='$this->EmailJefe',fk_empresa='$this->Empresa',es_jefe=1, activo=1");

		if($this->db->affected_rows>0){
        	header('location: ?view=unity&mode=add&success=true');
        } 
        else {
            header('location: ?view=unity&mode=add&error=true');
        }

	}



	public function __destruct() {
		$this->db->close();
	}
}



?>