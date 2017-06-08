<?php

/**
* 
*/
class home
{	
	
	function __construct()
	{
		$this->connect    = new connectdb();
	}

	public function misEncuestas(){
		$resp =array();
		$query ="SELECT titulo,unidad,fecha_creacion, sum(completado) as completado,count(completado)as total FROM tbl_encuestas a ,tbl_encuesta_valida b WHERE a.id_encuesta = b.encuesta AND a.activo =1 group by a.id_encuesta,b.unidad  ";

		
		$result = mysqli_query($this->connect, $query);

				if ($result) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $resp[] = array("titulo" => $row["titulo"],"unidad" => $row["unidad"], "fecha" => $row["fecha_creacion"], "completado" => $row["completado"], "total" => $row["total"]);

				    }
				} else {
				    echo "0 results";
				}
				return $resp;

	}


}

?>