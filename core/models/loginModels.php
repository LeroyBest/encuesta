<?php

class validaCredenciales{

	
	public function __construct()
		    {
		       	$this->connect    = new connectdb();
        		
		    }

	public function validaCredenciales($user, $password){
			
			$ans ="";
			$query = "SELECT * FROM tbl_usuarios WHERE correo_electronico = '$user' AND clave = '$password' ";

			$result = mysqli_query($this->connect, $query);


			if( mysqli_num_rows($result) > 0){

				while($row = $result->fetch_assoc()) {

				$ans= $row["nombre"]." ".$row["apellido"];
				}
			}
			else{
				$ans=false;
			}


				return $ans;
	}

}
?>