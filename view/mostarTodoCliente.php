

<meta http-equiv="content-type" content="text/html" charset="utf-8">
<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">


<?php
        echo "<div class='caption'>
                <h4>Lista de clientes</h4>
            	</div>
        		<table class='table table-bordered table-condensed table-responsive table-hover'>
        		<tr><th>Nombre</th><th>Apellido</th><th>Identificacion</th><th>Telefono</th><th>Direccion</th><th>Accion</th></tr>";
        foreach ($results as $row) {
                echo "<form action='../controller/controllerGestionCliente.php' method='POST'>".
                        "<tr>".
                        "<td>".$row["nombre"]."</td>".
                        "<td>".$row["apellido"]."</td>".
                        "<td>".$row["identificacion"]."</td>".
                        "<td>".$row["telefono"]."</td>".
                        "<td>".$row["direccion"]."</td>".
                        "<td>
                                <input type='submit' class='btn-info btn-block btn-lg' value='Editar' name='btnEditar'/>
                                <input type='hidden' name='txtNombre' value='" . $row["nombre"] . "'/>
                                <input type='hidden' name='txtApellido' value='" . $row["apellido"] . "'/>
                                <input type='hidden' name='txtIdentificacion' value='" . $row["identificacion"] . "'/>
                                <input type='hidden' name='txtTelefono' value='" . $row["telefono"] . "'/>
                                <input type='hidden' name='txtDireccion' value='" . $row["direccion"] . "'/>                                
                        </td>".
                        "</tr>".
                        "</form>";
        }
        echo "</table>";
?>
<form method="POST">
	<input type='submit' class='btn-warning btn-block btn-lg' value='Volver' name='btnVolver'/>
</form>


	<script src="assets/jquery/jquery-2.1.4.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>