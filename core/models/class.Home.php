<?php

class Home {
	
	private $db;
  
	public function __construct() {
		$this->db = new Conexion();
	}
	  
	  
	public function misEncuestas() {
		  
		$resp = false;
		$sql = $this->db->query("SELECT id_encuesta,titulo,departamento,fecha_creacion, sum(completado) as completado,count(completado)as total FROM tbl_encuestas a ,tbl_encuesta_valida b WHERE a.id_encuesta = b.encuesta AND a.activo =1 group by a.id_encuesta,b.departamento");
		if($this->db->rows($sql) > 0) {
			while($data = $this->db->recorrer($sql)) {
				$resp[$data['id_encuesta']] = $data;
			}
		} else {
			$resp = false;
		}
		$this->db->liberar($sql);  
		return $resp;
	}


	public function __destruct() {
		$this->db->close();
	}
}



?>