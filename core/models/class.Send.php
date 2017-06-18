<?php

class Send {

  private $idencuesta;
  private $departamento;
  private $num;
  private $db;

	public function __construct() {
		$this->db = new Conexion();
	}
	  
	private function Errors($url) {
		try {

		  if(empty($_POST['selencuesta'])||empty($_POST['depart'])||empty($_POST['numEncuestados'])) {
			throw new Exception(1);
		  } else {
			$this->idencuesta = $this->db->real_escape_string($_POST['selencuesta']);
			$this->departamento = $this->db->real_escape_string($_POST['depart']);
			$this->num = $this->db->real_escape_string($_POST['numEncuestados']);
				
		  }
		} catch(Exception $error) {
		  header('location: '.$url .$error->getMessage());
		  exit;
		}
	}
  
	public function EnviarEncuesta() {

        $this->Errors('?view=send&mode=enviar&error=');
		$cifrado = new Cifrado();
		$para;
		$mensaje;

		for ($i=0; $i < $this->num; $i++) { 
		$para=$_POST['correo'.$i];
		$nombre=$_POST['nombre'.$i];


		//$mensaje = "http://localhost/encuesta/?view=preguntas&mode=list&sn=".$cifrado ->encodeBase64($idencuesta)."&eval=". md5($para);


		$sn = $cifrado ->encodeBase64($this->idencuesta);
		$eval = md5($para);
		$link = APP_URL . '?view=preguntas&mode=list&sn='.$sn.'&eval='. $eval;
		$mail = new PHPMailer();	
		$mail->CharSet = "UTF-8";
		$mail->Encoding = "quoted-printable";

		$mail->isSMTP();                                      		
		$mail->SMTPDebug    = 1;
		$mail->SMTPAuth = false;                               		
		$mail->Host = "a2plcpnl0416.prod.iad2.secureserver.net"; 
		$mail->Port = 25;                                    		
		$mail->Username = "info@507developers.com";                		
		$mail->Password = "507developers.com";                       		
		$mail->SetFrom("info@507developers.com", "Encuesta");	
		$mail->AddAddress($para); 
		$mail->Subject = 'Deseamos saber su opinión... ';
		$mail->MsgHTML(EmailTemplate($nombre,$link ));

		//$models->insertaEncuestaValida(md5($para),$departamento,$idencuesta,0);
		$this->db->query("INSERT INTO tbl_encuesta_valida SET cadena='$eval',unidad='$this->departamento',encuesta='$this->idencuesta',completado='0'");
		if($this->db->affected_rows>0){
			$mail->send();
        } else {
          
        } 

	}
	header('location: ?view=home');



}

	public function ListaEncuestas() {
		  
		$resp = false;
		$sql = $this->db->query("SELECT * FROM tbl_encuestas where activo =1 ");
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