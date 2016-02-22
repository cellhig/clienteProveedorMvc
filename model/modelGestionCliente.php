<?php

include "modelConexion.php";

class modelGestionCliente{

	public $conn = null;

	function modelGuardar($nombre,$apellido,$identificacion,$telefono,$direccion){

		$objconec = new modelConexion();

		$this->conn = $objconec->modelConectarbd();

		$query = "INSERT INTO cliente (nombre, apellido, identificacion, telefono, direccion) VALUES ('".$nombre."','".$apellido."','".$identificacion."','".$telefono."','".$direccion."') ";

		$result = mysql_query($query,$this->conn);
		
		return $result;
	}

	function modelMostarTodo(){

		$objconec = new modelConexion();

		$this->conn = $objconec->modelConectarbd();

		$query = "SELECT * FROM cliente";

		$result = mysql_query($query,$this->conn);

	
			return $result;
		}

	function modelActualizar($nombre,$apellido,$identificacion,$telefono,$direccion){

		$objconec = new modelConexion();

		$this->conn = $objconec->modelConectarbd();

		$query = "update cliente set nombre = '".$nombre."', apellido = '".$apellido."', identificacion = '".$identificacion."', telefono = '".$telefono."', direccion = '".$direccion."' WHERE identificacion = '".$identificacion."' ";

		$result = mysql_query($query,$this->conn);
		
		return $result;
	}

		function modelEliminar($identificacion){

		$objconec = new modelConexion();

		$this->conn = $objconec->modelConectarbd();

		$query = "DELETE FROM cliente WHERE identificacion = '".$identificacion."' ";

		$result = mysql_query($query,$this->conn);

		return $result;

	}



	}


?>