<?php

/**
* 
*/
class cifrado 
{
	//public $caract;

	function __construct()
	{
		//$this->caract = $cadena;
	}

	public function encode($cadena){
		
		$caract = md5($cadena);

		return $caract;
	}


	public function encodeBase64($cadena){
		
		$caract = base64_encode($cadena);

		return $caract;
	}

	public function decodeBase64($cadena){
		
		$caract = base64_decode($cadena);

		return $caract;
	}

	

}

?>