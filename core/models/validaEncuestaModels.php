<?php

class validaEncuestaModels{

	
	public function __construct()
		    {
		       	$this->connect    = new connectdb();
        		
		    }

	public function encuestaValida($cadena,$encuesta){
		      
			$query = "SELECT * FROM tbl_encuesta_valida where cadena ='$cadena' and encuesta = $encuesta ";

			$result = mysqli_query($this->connect, $query);
			$num = mysqli_num_rows($result);

				if ($num>0) {
				    
				    while($row = $result->fetch_assoc()) {
				        $resp =$row["completado"];

				    }
				    if($resp== 1){
				    	return 2;//completado
				    }else if($resp== 0){
				    	return 1;
				    }

				} else {
				    return 0;
				}
				
	}


	public function insertaEncuestaValida($cadena,$departamento,$encuesta,$completado){
		$query = "INSERT INTO tbl_encuesta_valida VALUES('$cadena','$departamento',$encuesta,$completado)";

				

					if (mysqli_query($this->connect, $query)) {
	    			return 1;
					} else {
		   				echo "Error: " . $query . "<br>" . mysqli_error($this->connect);
					}

	}

	public function encuestas(){
		    $resp =array();  
			$query = "SELECT * FROM tbl_encuestas where activo =1 ";


			$result = mysqli_query($this->connect, $query);

				if ($result) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $resp[] = array("id" => $row["id_encuesta"], "titulo" => $row["titulo"]);


				        //"id: " . $row["id_products"]. " descripcion: " . $row["descripcion"]. " precio" . $row["precio"];
				    }
				} else {
				    echo "0 results";
				}
				return $resp;
				
	}

	public function encuestaCompletada($cadena,$encuesta){
		$query = "UPDATE tbl_encuesta_valida SET completado=1 where cadena ='$cadena' and encuesta = $encuesta ";

				

					if (mysqli_query($this->connect, $query)) {
	    			return 1;
					} else {
		   				echo "Error: " . $query . "<br>" . mysqli_error($this->connect);
					}

	}

}
?>