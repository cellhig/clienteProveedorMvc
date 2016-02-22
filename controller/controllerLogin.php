<?php

error_reporting(0);
include "../model/modelLogin.php";
require_once "../view/header.php";

if (isset($_POST["btnLogin"])) {
	$user = $_POST["txtUser"];
	$password = $_POST["txtPasword"];

	$objmodellogin = new modelLogin();

	$result = $objmodellogin->modelLogueo($user,$password);

	//var_dump($result); // esto es para imprimir la variable que viene desde la BD 

	if ($result == true) {
		echo "<script>alert ('datos correctos!'); location = '../controller/controllerSeleccionarGestion.php'</script>";
	} else {
		echo "<script>alert ('datos incorrectos!');</script>";
	}

}




?>