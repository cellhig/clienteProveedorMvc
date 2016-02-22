<?php

include "modelConexion.php";

class modelGestionProveedor{

	public $conn = null;

	function modelGuardar($nombre,$identificacion,$telefono,$direccion,$url){

		$objconec = new modelConexion();

		$this->conn = $objconec->modelConectarbd();

		$query = "INSERT INTO proveedor(nombre, identificacion, telefono, direccion, url) VALUES ('".$nombre."','".$identificacion."','".$telefono."','".$direccion."','".$url."') ";

		$result = mysql_query($query,$this->conn);
		
		return $result;
	}

	function modelMostarTodo(){

		$objconec = new modelConexion();

		$this->conn = $objconec->modelConectarbd();

		$query = "SELECT * FROM proveedor";

		$result = mysql_query($query,$this->conn);

	
			return $result;
		}

	function modelActualizar($nombre,$identificacion,$telefono,$direccion,$url){

		$objconec = new modelConexion();

		$this->conn = $objconec->modelConectarbd();

		$query = "update proveedor set nombre = '".$nombre."', identificacion = '".$identificacion."', telefono = '".$telefono."', direccion = '".$direccion."', url = '".$url."', WHERE identificacion = '".$identificacion."' ";

		$result = mysql_query($query,$this->conn);
		
		return $result;
	}

		function modelEliminar($identificacion){

		$objconec = new modelConexion();

		$this->conn = $objconec->modelConectarbd();

		$query = "DELETE FROM proveedor WHERE identificacion = '".$identificacion."' ";

		$result = mysql_query($query,$this->conn);

		return $result;

	}



	}


?>