
<!-- estilo -->
<meta http-equiv="content-type" content="text/html" charset="utf-8">
<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
<!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
<link rel="stylesheet" type="text/css" href="../assets/css/header.css">



  <!-- crud del cleinte -->

<form class="form-horizontal" method="POST">
  <fieldset>
 
  <!-- Form Name -->
  <legend>Datos Cliente</legend>
 
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="txtNombre">Nombre</label>  
    <div class="col-md-5">
    <input id="txtNombre" name="txtNombre" type="text" placeholder="ej: Pedro" class="form-control input-md" value="<?php if (isset($name)) { echo $name; } ?>">
     
    </div>
  </div>
 
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="txtApellido">Apellido</label>  
    <div class="col-md-5">
    <input id="txtApellido" name="txtApellido" type="text" placeholder="ej: Jaramillo " class="form-control input-md" value="<?php if (isset($surname)) { echo $surname; } ?>">
     
    </div>
  </div>
 
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="txtIdentificacion">Nro. de Identificacion</label>  
    <div class="col-md-5">
    <input id="txtIdentificacion" name="txtIdentificacion" type="text" placeholder="" class="form-control input-md" required="" value="<?php if (isset($dni)) { echo $dni; } ?>">
    <span class="help-block">su numero de identificación ciudadana</span>  
    </div>
  </div>
 
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="txtTelefono">Telefono</label>  
    <div class="col-md-5">
    <input id="txtTelefono" name="txtTelefono" type="text" placeholder="ej: +574555555" class="form-control input-md" value="<?php if (isset($phone)) { echo $phone; } ?>">
     
    </div>
  </div>
 
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="txtDireccion">Direccion</label>  
    <div class="col-md-5">
    <input id="txtDireccion" name="txtDireccion" type="text" placeholder="ej: Crr 50 #5-68 apto 6-14" class="form-control input-md" value="<?php if (isset($adress)) { echo $adress; } ?>">
     
    </div>
  </div>
 
                       <!-- Buttons -->
    <div class="form-group">
      <button id="btnGuardar" name="btnGuardar" class="btn btn-success btn-block btn-lg">Guardar</button>
      <button id="btnActualizar" name="btnActualizar" class="btn btn-primary btn-block btn-lg">Actualizar</button>
      <button id="btnEliminar" name="btnEliminar" class="btn btn-danger btn-block btn-lg">Eliminar</button></br>
  </form>
 
  <form method="POST">  
      <button id="btnMostarTodo" name="btnMostarTodo" class="btn btn-info btn-block btn-lg">Mostrar todo</button>
  </form>    
    </div>
 
  </fieldset>
 

<!-- scripts -->
<script src="../assets/jquery/jquery-2.1.4.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
