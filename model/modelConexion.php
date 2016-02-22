<?php

class modelConexion {
	public $server = "localhost";
	public $user = "root";
	public $pass = "";
	public $dbName = "triivmvc";
	public $conn = null;

	function modelConectarbd(){

		$this->conn = mysql_connect($this->server,$this->user,$this->pass);
		mysql_select_db($this->dbName,$this->conn);

		return $this->conn;
	}
}



?>