<?php
 
session_start();
 
include "../model/modelGestionCliente.php";
require_once "../view/headerGestion.php";

 
$objmodelGestionCliente = new modelGestionCliente();
 
if (isset($_POST["btnGuardar"]) || isset($_POST["btnEditar"])) {
 
        $name = $_POST["txtNombre"];
        $surname = $_POST["txtApellido"];
        $dni = $_POST["txtIdentificacion"];
        $phone = $_POST["txtTelefono"];
        $adress = $_POST["txtDireccion"];
 
        //var_dump($result);
 
        if (isset($_POST["btnGuardar"])) {
                $result = $objmodelGestionCliente->modelGuardar($name,$surname,$dni,$phone,$adress);
 
                if ($result == true) {
                        echo "<script>alert ('datos guardadados!'); location = '../controller/controllerGestionCliente.php'</script>";
                } else {
                        echo "<script>alert ('error de conexion!');</script>";
                }

        } else {
                require_once "../view/gestionCliente.php";
        }
 
} else if (isset($_POST["btnMostarTodo"])) {
       
        $result = $objmodelGestionCliente->modelMostarTodo();
 
        while ($row = mysql_fetch_array($result)) {
               $results[] = $row;
        }
 
        require_once "../view/mostarTodoCliente.php";
 
} else if (isset($_POST["btnEliminar"])) {
 
        $dni = $_POST["txtIdentificacion"];
 
        $result = $objmodelGestionCliente->modelEliminar($dni);

        if ($result == true) {
                echo "<script>alert ('Registro eliminado!'); location = '../controller/controllerGestionCliente.php'</script>";
        } else {
                echo "<script>alert ('error de conexion!');</script>";
        }

 
        $resultE = $objmodelGestionCliente->modelMostarTodo();
 
        while ($row = mysql_fetch_array($resultE)) {
               $results[] = $row;
        }
        
       // require_once "../view/mostarTodoCliente.php";
       
} else if (isset($_POST["btnActualizar"])) {

        $name = $_POST["txtNombre"];
        $surname = $_POST["txtApellido"];
        $dni = $_POST["txtIdentificacion"];
        $phone = $_POST["txtTelefono"];
        $adress = $_POST["txtDireccion"];

        $result = $objmodelGestionCliente->modelActualizar($name,$surname,$dni,$phone,$adress);

        if ($result == true) {
                echo "<script>alert ('datos Actualizados!'); location = '../controller/controllerGestionCliente.php'</script>";
        } else {
                echo "<script>alert ('error de conexion!');</script>";
        }

        $resultE = $objmodelGestionCliente->modelMostarTodo();
 
        while ($row = mysql_fetch_array($resultE)) {
               $results[] = $row;
        }
        
        //require_once "../view/mostarTodoCliente.php";     

} else {

	require_once "../view/gestionCliente.php";

}
 
require_once "../view/footerGestion.php";
 
?>