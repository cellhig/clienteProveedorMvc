<?php

include "modelConexion.php";

class modelLogin{

	public $conn = null;

	function modelLogueo($usuario,$pass){

		$objconec = new modelConexion();

		$this->conn = $objconec->modelConectarbd();

		$query = "select * from usuario where usuario = '".$usuario."' and contrasena = '".$pass."'";
		$result = mysql_query($query,$this->conn);

		if (mysql_fetch_array($result)) {
			$res = true;
		} else {
			$res = false;
		}

		return $res;		
	}
}

?>