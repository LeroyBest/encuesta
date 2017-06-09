<?php

class Result {

	public function __construct() {
		$this->db = new Conexion();
	}
	  
	public function promedioXpreguntas(){
		
		$resp = false;
		$sql = $this->db->query("SELECT id_pregunta,pregunta,sum(valores_estudio)/sum(cantidad) as promedio FROM tbl_estudio as estudio, tbl_preguntas as preguntas where preguntas.id_pregunta= estudio.fk_pregunta group by fk_pregunta");
		if($this->db->rows($sql) > 0) {
			while($data = $this->db->recorrer($sql)) {
				$resp[$data['id_pregunta']] = $data;
			}
		} else {
			$resp = false;
		}
		$this->db->liberar($sql);  
		return $resp;
	}
  
	public function promedioXcriterios(){

		$resp = false;
		$sql = $this->db->query("SELECT id_criterio,descripcion,sum(valores_estudio)/sum(cantidad) as promedio FROM tbl_estudio as estudio, tbl_criterios as criterio where criterio.id_criterio= estudio.fk_criterio group by fk_criterio");
		if($this->db->rows($sql) > 0) {
			while($data = $this->db->recorrer($sql)) {
				$resp[$data['id_criterio']] = $data;
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