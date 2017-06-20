<?php

class Company {
	
	private $db;
	private $companyName;
	private $gerente;
	private $EmailGerente;
  
	public function __construct() {
		$this->db = new Conexion();

	}
	  
	  
	public function insertNewCompany() {
		$this->companyName = $this->db->real_escape_string($_POST['txtCompany']);
		$this->gerente = $this->db->real_escape_string($_POST['txtGerente']);
		$this->EmailGerente = $this->db->real_escape_string($_POST['txtEmailGerente']);  
		$resp = false;
		//$this->db->query("INSERT INTO tbl_empresa VALUES ('','$this->companyName','$this->gerente','$this->EmailGerente',1)");
			//echo "INSERT INTO tbl_empresa SET descripcion='$this->companyName',colaborador='$this->gerente',correo='$this->EmailGerente',es_jefe=1";	
		$this->db->query("INSERT INTO tbl_empresa SET descripcion='$this->companyName',colaborador='$this->gerente',correo='$this->EmailGerente',es_jefe=1");

		if($this->db->affected_rows>0){
        	header('location: ?view=company&mode=new&success=true');
        } 
        else {
            header('location: ?view=company&mode=new&error=true');
        }

	}

	public function __destruct() {
		$this->db->close();
	}
}



?>