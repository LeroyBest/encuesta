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


}
?>