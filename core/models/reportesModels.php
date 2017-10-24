<?php

class reportesModels{

	
	public function __construct()
		    {
		       	$this->connect    = new connectdb();
        		
		    }





	public function evaluacion($result){
		    $resp =array();  
			$query = "SELECT * FROM tbl_resultado_evaluacion where id_resultado =$result";


			$result = mysqli_query($this->connect, $query);

				if ($result) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $resp[] = array("primer" => $row["primer_resultado"], "segundo" => $row["segundo_resultado"], "tercero" => $row["tercer_resultado"],"cuarto" => $row["cuarto_resultado"]);


				        //"id: " . $row["id_products"]. " descripcion: " . $row["descripcion"]. " precio" . $row["precio"];
				    }
				} else {
				    echo "0 results";
				}
				return $resp;
				
	}


	public function promedioCriterio($departamento){
		    $resp =array();  
			$query = "SELECT fk_criterio as criterio, (sum(valores_estudio)/count(distinct fk_pregunta))/count(distinct cliente) promedio FROM tbl_estudio WHERE cliente in (SELECT cadena FROM tbl_encuesta_valida where departamento =$departamento) group by fk_criterio";


			$result = mysqli_query($this->connect, $query);

				if ($result) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $resp[] = array("criterio" => $row["criterio"], "promedio" => $row["promedio"]);


				        //"id: " . $row["id_products"]. " descripcion: " . $row["descripcion"]. " precio" . $row["precio"];
				    }
				} else {
				    echo "0 results";
				}
				return $resp;
				
	}


}
?>