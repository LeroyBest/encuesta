<?php
//session_start();


class encuesta{
	
	public $server = "localhost";
	public $user = "cotiza";
	public $password = "admin";
	public $bd = "survey";
	//public $connect;
	

	public $values;

		public function __construct()
		    {
		       	$this->connect    = new connectdb();//$this->connect();
        		$this->query    = ' ';
        		$this->values    = ' ';
		    }

		public function connect(){
			$this->connect= mysqli_connect($this->server, $this->user, $this->password,$this->bd);
			
		//	return $this->connect;
		}

		public function preguntas($a,$b){
			
			$resp =array();
			$query = "SELECT * FROM tbl_preguntas limit $a,$b";


			$result = mysqli_query($this->connect, $query);

				if ($result) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $resp[] = array("id" => $row["id_pregunta"], "preguntas" => $row["pregunta"]);


				        //"id: " . $row["id_products"]. " descripcion: " . $row["descripcion"]. " precio" . $row["precio"];
				    }
				} else {
				    echo "0 results";
				}
				return $resp;
			

		}

		public function cantidadPreguntas(){
			
			$resp =array();
			$query = "SELECT count(*) as cantidad FROM tbl_preguntas where 1 ";


			$result = mysqli_query($this->connect, $query);

				if ($result) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $resp =$row["cantidad"];

				    }
				} else {
				    echo "0 results";
				}
				return $resp;
			

		}

		public function pesorespuestas($respuesta){
			
			//$resp =array();
			$query = "SELECT peso FROM tbl_peso_resp where respuesta= '$respuesta'";


			$result = mysqli_query($this->connect, $query);

				if ($result) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $resp =$row["peso"];// array("id" => $row["id_pregunta"], "preguntas" => $row["pregunta"]);


				    }
				} else {
				    echo "0 results";
				}
				return $resp;
			

		}


		public function validaEstudio($idpregunta){
			
			//$resp =array();
			$query = "SELECT * FROM tbl_estudio where fk_pregunta= $idpregunta";


			$result = mysqli_query($this->connect, $query);

				if ($result) {
				    // output data of each row
				   return 1;
				} else {
				    return 0;
				}
			

		}
		
		
		public function insertaestudio($id,$eval,$valor){
			
			$peso=$this->pesorespuestas($valor);
//echo $this->validaEstudio($id);
			//if($this->validaEstudio($id) == 0){

			

				$resp ="";
				$query = "INSERT INTO tbl_estudio (fk_pregunta,fk_criterio,cliente,valores_estudio,cantidad) SELECT '$id',fk_criterio,'$eval',$peso,1 FROM tbl_preguntas WHERE id_pregunta =$id";

				/*if (mysqli_query($this->connect, $query)) {
	    			echo "select successfully";
				} else {
	   				echo "Error: " . $query . "<br>" . mysqli_error($this->connect);
				}*/

				//$result = mysqli_query($this->connect, $query);

					if (mysqli_query($this->connect, $query)) {
	    			return 1;
					} else {
		   				echo "Error: " . $query . "<br>" . mysqli_error($this->connect);
					}
			//}
			
		}



	
}


?>