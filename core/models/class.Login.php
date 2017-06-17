<?php

class Login {

  private $user;
  private $password;
  private $db;

  public function __construct() {
    $this->db = new Conexion();
  }
  
  private function Errors($url) {
    try {

	  if(empty($_POST['user'])||empty($_POST['pass'])) {
        throw new Exception(1);
      } else {
		$this->user = $this->db->real_escape_string($_POST['user']);
        $this->password = $this->db->real_escape_string($_POST['pass']);

      }
    } catch(Exception $error) {
      header('location: '.$url .$error->getMessage());
      exit;
    }
  }
  
  public function validaCredenciales() {

      $this->Errors('?view=login&mode=validar&error=');
      $sql = $this->db->query("SELECT nombre, apellido FROM tbl_usuarios WHERE correo_electronico='$this->user' AND clave = '$this->password' LIMIT 1;");
		if($this->db->rows($sql) > 0) {
			$data = $this->db->recorrer($sql);

			$_SESSION['user'] = $data[0]." ". $data[1];

			 header('location: ?view=home');
		} else {
			 header('location: ?view=login&mode=validar&error=true');

		}
		  $this->db->liberar($sql);

}


  public function __destruct() {
    $this->db->close();
 }
}



?>