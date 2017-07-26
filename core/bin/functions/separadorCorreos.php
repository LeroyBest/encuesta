<?php

/**
* 
*/
class separadorCorreos 
{
	//public $caract;

	function __construct()
	{
		//$this->caract = $cadena;
	}

	public function separar($cadena,$delimiter){
		if($delimiter === 0){
			$array = explode(";", $cadena);	
		}
		else if($delimiter === 1){
			$array = explode(",", $cadena);
		}
		return $array;
	}


	

}

?>