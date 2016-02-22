<?php
 
session_start();
 
include "../model/modelGestionProveedor.php";
require_once "../view/headerGestion.php";

 
$objmodelmodelGestionProveedor = new modelGestionProveedor();
 
if (isset($_POST["btnGuardar"]) || isset($_POST["btnEditar"])) {
 
        $name = $_POST["txtNombre"];        
        $dni = $_POST["txtIdentificacion"];
        $phone = $_POST["txtTelefono"];
        $adress = $_POST["txtDireccion"];
        $url = $_POST["txtUrl"];
 
        //var_dump($result);
 
        if (isset($_POST["btnGuardar"])) {
            
                $result = $modelGestionProveedor->modelGuardar($nombre,$identificacion,$telefono,$direccion,$url);
 
                if ($result == true) {
                        echo "<script>alert ('datos guardadados!'); location = '../controller/controllerGestionProveedor.php'</script>";
                } else {
                        echo "<script>alert ('error de conexion!');</script>";
                }

        } else {
                require_once "../view/gestionProveedor.php";
        }
 
} else if (isset($_POST["btnMostarTodo"])) {
       
        $result = $modelGestionProveedor->modelMostarTodo();
 
        while ($row = mysql_fetch_array($result)) {
               $results[] = $row;
        }
 
        require_once "../view/mostrarTodoProveedor.php";
 
} else if (isset($_POST["btnEliminar"])) {
 
        $dni = $_POST["txtIdentificacion"];
 
        $result = $modelGestionProveedor->modelEliminar($dni);

        if ($result == true) {
                echo "<script>alert ('Registro eliminado!'); location = '../controller/controllerGestionProveedor.php'</script>";
        } else {
                echo "<script>alert ('error de conexion!');</script>";
        }

 
        $resultE = $modelGestionProveedor->modelMostarTodo();
 
        while ($row = mysql_fetch_array($resultE)) {
               $results[] = $row;
        }
        
       // require_once "../view/mostarTodoCliente.php";
       
} else if (isset($_POST["btnActualizar"])) {

        $name = $_POST["txtNombre"];        
        $dni = $_POST["txtIdentificacion"];
        $phone = $_POST["txtTelefono"];
        $adress = $_POST["txtDireccion"];
        $url = $_POST["txtUrl"];

        $result = $modelGestionProveedor->modelActualizar($nombre,$identificacion,$telefono,$direccion,$url);

        if ($result == true) {
                echo "<script>alert ('datos Actualizados!'); location = '../controller/controllerGestionProveedor.php'</script>";
        } else {
                echo "<script>alert ('error de conexion!');</script>";
        }

        $resultE = $modelGestionProveedor->modelMostarTodo();
 
        while ($row = mysql_fetch_array($resultE)) {
               $results[] = $row;
        }
        
        //require_once "../view/mostarTodoCliente.php";     

} else {

	require_once "../view/gestionProveedor.php";

}
 
require_once "../view/footerGestion.php";
 
?>