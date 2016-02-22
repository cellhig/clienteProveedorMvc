<?php
//session_start();

include "../model/modelGestionCliente.php";
require_once "../view/headerGestion.php";

$result = $objmodelGestionCliente->modelMostarTodo();
while ($row = mysql_fetch_array($result)) {
        $results[] = $row;
}



require_once "../view/mostarTodoCliente.php";
require_once "../view/footerGestion.php";


?>