<?php

include "../view/headerGestion.php";

if (isset($_POST["btnGestionCliente"])) {

	require_once "../view/gestionCliente.php";

} else if (isset($_POST["btnGestionProveedor"])) {

	require_once "../view/gestionProveedor.php";

} else {

	require_once "../view/seleccionarGestion.php";
}


require_once "../view/footerGestion.php";


?>