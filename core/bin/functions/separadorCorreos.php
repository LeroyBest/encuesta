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

	public function separar($cadena){
		
		$array = explode(";", $cadena);

		return $array;
	}


	

}

?>