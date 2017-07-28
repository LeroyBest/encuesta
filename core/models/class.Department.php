<?php

class Department {
	
	private $db;
	private $departmentName;
	private $gerente;
	private $colaborador;
	private $emailGerente;
	private $emailColaborador;
	private $unidad;
  	private $separador;

	public function __construct() {
		$this->db = new Conexion();
		$this->separador = new separadorCorreos();

	}
	  
	  
	public function insertNewDepartment() {
		$this->departmentName = $this->db->real_escape_string($_POST['txtDepartamento']);
		$this->gerente = $this->db->real_escape_string($_POST['txtJefeDep']);
		$this->emailGerente = $this->db->real_escape_string($_POST['txtEmailJefeDep']);  
		$this->unidad = $this->db->real_escape_string($_POST['txtUnidad']); 
		$resp = false;
	

		$this->db->query("INSERT INTO tbl_departamento SET descripcion='$this->departmentName',colaborador='$this->gerente',correo='$this->emailGerente',fk_unidad='$this->unidad',es_jefe=1, activo=1");

		if($this->db->affected_rows>0){
        	header('location: ?view=department&mode=add&success=true');
        	
        } 
        else {
            header('location: ?view=department&mode=add&error=true1');
        }

	}


	public function insertColaboradores() {
		$this->departmentName = $this->db->real_escape_string($_POST['txtDepartamento']);
		$this->gerente = $this->db->real_escape_string($_POST['txtJefeDep']);
		$this->colaborador = $this->db->real_escape_string($_POST['txtEmailJefeDep']);  
		$this->unidad = $this->db->real_escape_string($_POST['txtUnidad']); 
		$correos = $this->db->real_escape_string($_POST['taCorreos']);

		$resp = false;

		print_r($this->separador->separar($correos,0));
		$arrayNameMail=$this->separador->separar($correos,0);
//print_r($arrayNameMail[0]);
		foreach ($arrayNameMail as $value) {
			//print_r($value);
			$nameMailSplit	=	$this->separador->separar($value,1);

			//print_r("INSERT INTO tbl_departamento SET descripcion='$this->departmentName',colaborador='$nameMailSplit[0]',correo='$nameMailSplit[1]',fk_unidad='$this->unidad',es_jefe=0, activo=1");
			$this->db->query("INSERT INTO tbl_departamento SET descripcion='$this->departmentName',colaborador='$nameMailSplit[0]',correo='$nameMailSplit[1]',fk_unidad='$this->unidad',es_jefe=0, activo=1");
		}

		if($this->db->affected_rows>0){
        	header('location: ?view=department&mode=add&success=true');
        } 
        else {
            header('location: ?view=department&mode=add&error=true');
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

	public function listDepartment(){

			$sql = $this->db->query("SELECT * FROM tbl_departamento WHERE activo=1");
			
			if($this->db->rows($sql) > 0) {
				while($data = $this->db->recorrer($sql)) {
					$resp[$data['id_departamento']] = $data;
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