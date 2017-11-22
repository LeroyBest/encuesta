<?php

class Evaluation {
	
	private $db;
	
	public function __construct() {
		$this->db = new Conexion();
	}
	  
	public function evalResult($resultadoEval){
			
		$resp = false;
		//echo "SELECT * FROM tbl_resultado_evaluacion WHERE id_resultado = $resultadoEval";
		$sql = $this->db->query("SELECT * FROM tbl_resultado_evaluacion WHERE id_resultado = $resultadoEval");
		if($this->db->rows($sql) > 0) {
			while($data = $this->db->recorrer($sql)) {
				$resp[$data['id_resultado']] = $data;
			}
		} else {
			$resp = false;
		}
		$this->db->liberar($sql);  
		return $resp;

	}

	public function promedioCriterio($departamento){
		    $resp =array();  
			$sql = $this->db->query("SELECT fk_criterio as criterio, (sum(valores_estudio)/count(distinct fk_pregunta))/count(distinct cliente) promedio FROM tbl_estudio WHERE cliente in (SELECT cadena FROM tbl_encuesta_valida where departamento ='$departamento') group by fk_criterio");

				if ($this->db->rows($sql) > 0) {
				    // output data of each row
				    while($data = $this->db->recorrer($sql)) {
				        $resp[] = array("criterio" => $data["criterio"], "promedio" => $data["promedio"]);
				    					
				    }
				} 
				else {
				    $resp =false;
				}
			
			return $resp;
				
	}


	public function criteriosBajos($criterios){
		    $resp =array();  

		    foreach ($criterios as $key => $value) {
				$sql = $this->db->query("SELECT id_criterio,descripcion,pregunta FROM tbl_preguntas,tbl_criterios WHERE fk_criterio in ($criterios[$key]) and id_criterio = fk_criterio");
				//echo "SELECT pregunta FROM tbl_preguntas WHERE fk_criterio in ($criterios[$key])";
					if ($this->db->rows($sql) > 0) {
					    // output data of each row
					    while($data = $this->db->recorrer($sql)) {
					        $resp[] = array("id_criterio" => $data["id_criterio"],"descripcion" => $data["descripcion"],"pregunta" => $data["pregunta"]);
					    					
					    }
					} 
					else {
					    $resp =false;
					}
		    }


			
			return $resp;
				
	}

	public function cantidadPreguntas(){
			
		$resp = 0;
		$encuesta=$this->cifrado->decodeBase64($this->sn);
		$sql = $this->db->query("SELECT count(*) as cantidad FROM tbl_preguntas where encuesta =$encuesta");
		if($this->db->rows($sql) > 0) {
			 $data = $this->db->recorrer($sql);
			 $resp = $data[0];
			
		} else {
			$resp = 0;
		}
		$this->db->liberar($sql);  
		return $resp;

	}
	public function encuestaValida(){
		$encuesta=$this->cifrado->decodeBase64($this->sn);
		$resp = 0;
		$sql = $this->db->query("SELECT * FROM tbl_encuesta_valida where cadena ='$this->evalu'  and encuesta =$encuesta ");
		if($this->db->rows($sql) > 0) {
			while($data = $this->db->recorrer($sql)) {
				$resp = $data[3];
			}
		} else {
			$resp = 0;
		}
		$this->db->liberar($sql);  
		return $resp;
				
	}

	public function __destruct() {
		$this->db->close();
	}
}



?>