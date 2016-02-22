<!Doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
	<link rel="stylesheet" type="text/css" href="../assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
</head>
<body>
    <div id="background-carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active" style="background-image:url(../assets/img/business-q-c-1600-800-5.jpg)"></div>
            <div class="item" style="background-image:url(../assets/img/city-q-c-1600-800-1.jpg)"></div>
            <div class="item" style="background-image:url(../assets/img/nightlife-q-c-1600-800-6.jpg)"></div>  
          </div>
        </div>
    </div>
     
     
    <div id="content-wrapper">
    <!-- PAGE CONTENT -->
        <div class="container">
            <div class="page-header"><h3>Organizacion Empresarial</h3></div>
            <div class="well"><p> Los clientes y proveedores tambien son su negocio<br>
                <a href="#" data-toggle="modal" data-target="#login-modal"><button type="button" class="btn btn-primary btn-cons btn-block" name="Ingresar">Ingresar al sistema</button></a>
            </div><!-- End Well -->
        </div><!-- End Container -->
    <!-- PAGE CONTENT -->
    </div>

<form class="form-signin" method="POST">

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>Ingrese con su usuario y contraseña</h1><br>
              <form>
                <input type="text" name="txtUser" placeholder="Username">
                <input type="password" name="txtPasword" placeholder="Password">
                <input type="submit" name="btnLogin" class="login loginmodal-submit" value="Login">
              </form>
                
              <div class="login-help">
                <a href="#">Register</a> - <a href="#">Forgot Password</a>
              </div>
            </div>
        </div>
    </div>    

</form>

    <script src="../assets/jquery/jquery-2.1.4.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/header.js"></script>

</body>
</html>