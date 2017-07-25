<?php

class Department {
	
	private $db;
	private $departmentName;
	private $gerente;
	private $colaborador
	private $emailGerente;
	private $emailColaborador
	private $unidad;
  
	public function __construct() {
		$this->db = new Conexion();

	}
	  
	  
	public function insertNewDepartment() {
		$this->departmentName = $this->db->real_escape_string($_POST['txtDepartamento']);
		$this->gerente = $this->db->real_escape_string($_POST['txtJefeDep']);
		$this->emailGerente = $this->db->real_escape_string($_POST['txtEmailJefeDep']);  
		$this->unidad = $this->db->real_escape_string($_POST['txtUnidad']); 
		$resp = false;
	
		$this->db->query("INSERT INTO tbl_departamento SET descripcion='$this->departmentName',colaborador='$this->gerente',correo='$this->emailGerente',fk_unidad='$this->unidad',es_jefe=1, activo=1");

		if($this->db->affected_rows>0){
        	header('location: ?view=company&mode=add&success=true');
        } 
        else {
            header('location: ?view=company&mode=add&error=true');
        }

	}


	public function insertColaboradores() {
		$this->departmentName = $this->db->real_escape_string($_POST['txtDepartamento']);
		$this->gerente = $this->db->real_escape_string($_POST['txtJefeDep']);
		$this->colaborador = $this->db->real_escape_string($_POST['txtEmailJefeDep']);  
		$this->unidad = $this->db->real_escape_string($_POST['txtUnidad']); 
		$resp = false;
	
		$this->db->query("INSERT INTO tbl_departamento SET descripcion='$this->departmentName',colaborador='$this->colaborador',correo='$this->emailColaborador',fk_unidad='$this->unidad',es_jefe=0, activo=1");

		if($this->db->affected_rows>0){
        	header('location: ?view=company&mode=add&success=true');
        } 
        else {
            header('location: ?view=company&mode=add&error=true');
        }

	}


	public function listUnity(){

			$sql = $this->db->query("SELECT b.id_unidad, concat(a.descripcion ,' - ',b.descripcion) as unidad FROM tbl_empresa a, tbl_unidad b WHERE a.activo =1 and b.activo=1 and a.id_empresa =b.fk_empresa");
			
			if($this->db->rows($sql) > 0) {
				while($data = $this->db->recorrer($sql)) {
					$resp[$data['id_unidad']] = $data;
				}
				//include(HTML_DIR . 'unity/addUnity.php');
			}
			else
			{
				$resp = false;
				header('location: ?view=department&mode=add');
			}
			return $resp;
	}

	public function __destruct() {
		$this->db->close();
	}
}



?>