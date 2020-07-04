<?php 
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:../index.php");//significa que no han iniciado sesión
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta content="width=device-width, initial-scale=1.0" name="viewport">
 	<title>Zona Administracion</title>
 	<meta content="" name="Zona Administracion">
    <meta content="" name="keywords">

	    <!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	  
	<!-- CDN JQUERY -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style1.css" rel="stylesheet">
 </head>

 <body>

	<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo col-lg-11 col-xs-12">
          <h1 class="text-light"><a href="../index.php"><span>ComparaTuMoto</span></a></h1>
        </div>
        <!-- <div class="col-lg-7 col-xs-2">
          <span class="navbar-brand"><span>Bienvenido: </span><?php echo $_SESSION['user']?></</span>
   		  </div> -->
        <div class="col-lg-1 col-xs-1">  
          <a class="btn btn-success"  href="../vista/logout.php" role="button">Salir</a>
        </div>
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->
	<br>
	<br>
	<br>
	<br>

<form id="form-horizontal" action="../controlador/agregarmoto.php" method="POST">	
	<div class="container">	
		<div class="row">
			<div class="form-group col-lg-4 col-sm-12">
			  <label class="text-light">ID Detalle:</label>
  			  <input type="number" class="form-control" name="id_detalle"></input>
  			</div>
			<div class="form-group col-lg-4 col-sm-12">
			  <label class="text-light">ID Marca:</label>
  			  <input type="text" class="form-control" name="id_marca"></input>
  			</div>
		<div class="form-group col-lg-4 col-sm-12">
			  <label class="text-light">ID Categoria:</label>
  			  <input type="text" class="form-control" name="id_category"></input>
  			</div>	
			<div class="form-group col-lg-4 col-sm-12">
			  <label class="text-light">Referencia:</label>
  			  <input type="text" class="form-control" name="referencia"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="precio" class="text-light">Precio:</label>
  			  <input type="text" class="form-control" name="precio"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="motor" class="text-light">Motor:</label>
  			  <input type="text" class="form-control" name="motor"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="cilindrada" class="text-light">Cilindrada:</label>
  			  <input type="text" class="form-control" name="cilindrada"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="potencia" class="text-light">Potencia:</label>
  			  <input type="text" class="form-control" name="potencia"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
			  <label for="transmision" class="text-light">Transmision:</label>
			  <input type="text" class="form-control" name="transmision"></input>
			</div>
			<div class="form-group col-lg-4 col-sm-12">
			  <label for="ciclo" class="text-light">Ciclo:</label>
			  <input type="text" class="form-control" name="ciclo"></input>
			</div>
			<div class="form-group col-lg-4 col-sm-12">
			  <label for="refrigeracion" class="text-light">Refrigeracion:</label>
			  <input type="text" class="form-control" name="refrigeracion"></input>
			</div>
			<div class="form-group col-lg-4 col-sm-12">
			  <label for="cilindros" class="text-light">Cilindros:</label>
			  <input type="text" class="form-control" name="cilindros"></input>
			</div>
			<div class="form-group col-lg-4 col-sm-12">
			  <label for="regimen_potencia" class="text-light">Regimen Potencia:</label>
  			  <input type="text" class="form-control" name="regimen_potencia"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="arranque" class="text-light">Arranque:</label>
			  <input type="text" class="form-control" name="arranque"></input>
			</div>
			<div class="form-group col-lg-4 col-sm-12">
			  <label for="traccion" class="text-light">Traccion:</label>
			  <input type="text" class="form-control" name="traccion"></input>
			</div>
			<div class="form-group col-lg-4 col-sm-12">
			  <label for="distancia_ejes" class="text-light">Distancia entre ejes:</label>
  			  <input type="text" class="form-control" name="distancia_ejes"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="rueda_delantera" class="text-light">Llanta delantera:</label>
  			  <input type="text" class="form-control" name="rueda_delantera"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="rueda_trasera" class="text-light">Llanta trasera:</label>
  			  <input type="text" class="form-control" name="rueda_trasera"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="freno_delantero" class="text-light">Freno delantero:</label>
  			  <input type="text" class="form-control" name="freno_delantero"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="freno_trasero" class="text-light">Freno trasero:</label>
  			  <input type="text" class="form-control" name="freno_trasero"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="altura_asiento" class="text-light">Altura desde el asiento:</label>
  			  <input type="text" class="form-control" name="altura_asiento"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="peso" class="text-light">Peso:</label>
  			  <input type="text" class="form-control" name="peso"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="capacidad_deposito" class="text-light">Capacidad deposito:</label>
  			  <input type="text" class="form-control" name="capacidad_deposito"></input>
  			</div>
  			<div class="form-group col-lg-4 col-sm-12">
  			  <label for="compresion" class="text-light">Relacion de compresion:</label>
  			  <input type="text" class="form-control" name="compresion"></input>
  			</div>
  			<div class="form-group col-lg-6 col-sm-12">
  			  <label for="suspension_D" class="text-light">Suspension Delantera:</label>
			  <input type="text" class="form-control" name="suspension_D"></input>
			</div>
			<div class="form-group col-lg-6 col-sm-12">
			  <label for="suspension_T" class="text-light">Suspension Trasera:</label>
			  <input type="text" class="form-control" name="suspension_T"></input>
			</div>
			<div class="form-group col-lg-6 col-sm-12">
			  <label for="encendido" class="text-light">Encendido:</label>
			  <input type="text" class="form-control" name="encendido"></input>
			</div>
			<div class="form-group col-lg-6 col-sm-12">
			  <label for="caja_vel" class="text-light">Caja de velocidades:</label>
			  <input type="text" class="form-control" name="caja_vel"></input>
			</div>  
			  <br>
			<div class="btn col-lg-12 col-sm-12" >  
			  <button type="submit" class="btn btn-success">Agregar Motocicleta</button>
			</div>
			</div>
		</div>
	</div>
</form>	
 </body>

 <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 </html>