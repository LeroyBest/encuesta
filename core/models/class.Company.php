<?php

class Company {
	
	private $db;
	private $companyName;
	private $gerente;
	private $EmailGerente;
	private $buscaEmpresa;
  
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
		$this->db->query("INSERT INTO tbl_empresa SET descripcion='$this->companyName',colaborador='$this->gerente',correo='$this->EmailGerente',es_jefe=1, activo=1");

		if($this->db->affected_rows>0){
        	header('location: ?view=company&mode=add&success=true');
        } 
        else {
            header('location: ?view=company&mode=add&error=true');
        }

	}

	public function listCompany(){
		$this->buscaEmpresa =  $this->db->real_escape_string($_POST['txtbuscarEmpresa']);

		$resp = false;
		$sql = $this->db->query("SELECT * FROM tbl_empresa WHERE descripcion like '%$this->buscaEmpresa%'");
		
		if($this->db->rows($sql) > 0) {
			while($data = $this->db->recorrer($sql)) {
				$resp[$data['id_empresa']] = $data;
			}
			include(HTML_DIR . 'company/editCompany.php');
		} else {
			$resp = false;
			header('location: ?view=company&mode=edit');
		}
		$this->db->liberar($sql);  
		return $resp;
	}

	public function __destruct() {
		$this->db->close();
	}
}



?>