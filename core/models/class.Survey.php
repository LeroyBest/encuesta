<?php

class Survey {
	
	private $evalu;
    private $sn;
	private $cifrado;
    private $cant;
    private $check;
	private $db;
	
	
	public function __construct() {
		$this->db = new Conexion();
		$this->cifrado = new Cifrado();
		$this->evalu = $this->db->real_escape_string($_GET['eval']);
		$this->sn = $this->db->real_escape_string($_GET['sn']);
	}
	  
	public function preguntas($a,$b){
			
		$resp = false;
		$encuesta=$this->cifrado->decodeBase64($this->sn);
		$sql = $this->db->query("SELECT id_pregunta,fk_criterio,pregunta,encuesta FROM tbl_preguntas where  encuesta =$encuesta limit $a,$b");
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
				$resp = $data[4];
			}
		} else {
			$resp = 0;
		}
		$this->db->liberar($sql);  
		return $resp;
				
	}
	public function insertaestudio(){

		$idpreg = 0;
		$peso= 0;
		$valor = "";
		$query= "";
		$this->cant = $this->db->real_escape_string($_POST['cant']);
		
		for($i=1;$i<=$this->cant;$i++){
			$this->check = $this->db->real_escape_string($_POST['iCheck'.$i]);
			list($valor,$idpreg) = explode("_", $this->check);

			$sql = $this->db->query("SELECT peso FROM tbl_peso_resp where respuesta= '$valor'");
				if($this->db->rows($sql) > 0) {
					$data = $this->db->recorrer($sql);
					$peso = $data[0];
					$query .= "INSERT INTO tbl_estudio (fk_pregunta,fk_criterio,cliente,valores_estudio,cantidad) SELECT '$idpreg',fk_criterio,'$this->evalu',$peso,1 FROM tbl_preguntas WHERE id_pregunta =$idpreg;";
				} 
				
			$this->db->liberar($sql);

		}
		
		
		$_SESSION['limit']= intval($_SESSION['limit']) + QUANTITY_QTS;
		if(isset($_POST['enviar'])){
			$encuesta=$this->cifrado->decodeBase64($this->sn);
			$query .="UPDATE tbl_encuesta_valida SET completado=1 WHERE  cadena='$this->evalu' and  encuesta = $encuesta;";
			unset($_SESSION['limit']);

		}
		$this->db->multi_query($query);
	  

	header('location: ?view=survey&mode=list&sn='.$this->sn.'&eval='.$this->evalu);

		
	}
	public function __destruct() {
		$this->db->close();
	}
}



?>