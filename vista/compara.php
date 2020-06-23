<?php
// connect to database
include '../modelo/conexion.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Compara tu moto</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v2.0.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.php"><span>ComparaTuMoto</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#header">Inicio</a></li>
            <li><a href="#about">Nosotros</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li class="drop-down"><a href="">Menú</a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="drop-down"><a href="#">Drop Down 2</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#contact">Registrese</a></li>
            <li><a href="#team">Login</a></li>

            <li class="get-started"><a href="#why-us">Compara Ahora</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <div class="section-title" data-aos="fade-right">
              <br>
              <br>
              <br>
              <h2>Resultado</h2>
              <p>
                <table class="table-responsive table-dark text-center mt-3">
                  <thead>
                    <th class="text-center">Referencia</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Motor</th>
                    <th class="text-center">Cilindrada</th>
                    <th class="text-center">Potencia</th>
                    <th class="text-center">Transmision</th>
                    <th class="text-center">Ciclo</th>
                    <th class="text-center">Refrigeracion</th>
                    <th class="text-center">Cilindros</th>
                    <th class="text-center">Regimen Potencia</th>
                    <th class="text-center">Arranque</th>
                    <th class="text-center">Traccion</th>
                    <th class="text-center">Distancia Ejes</th>
                    <th class="text-center">Rueda D</th>
                    <th class="text-center">Rueda T</th>
                    <th class="text-center">Freno D</th>
                    <th class="text-center">Freno T </th>
                    <th class="text-center">Altura</th>
                    <th class="text-center">Peso</th>
                    <th class="text-center">Tanque</th>
                    <th class="text-center">Compresion</th>
                    <th class="text-center">Suspension D</th>
                    <th class="text-center">Suspencion T</th>
                    <th class="text-center">Encendido</th>
                    <th class="text-center">Caja</th>
                  </thead>
                <?php 
                  $referencia1 = isset($_GET['referencia1']) ? $_GET['referencia1'] : "0";
                  $referencia2 = isset($_GET['referencia2']) ? $_GET['referencia2'] : "0";
                  // page headers
                  $sentencia1="SELECT * FROM detalles WHERE referencia='$_GET[referencia1]' "; 
                   
                  $resultado1=Conectarse()->query($sentencia1) or die (mysqli_error($conexion));
                   
                      while ($filas=$resultado1->fetch_assoc()) { 
                          extract($filas);
                         

                          echo "<tr>";
                              echo "<td>"; 
                                echo  "<div class='referencia' style=''>{$filas['referencia']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='precio' style=''>{$filas['precio']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='motor' style=''>{$filas['motor']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='cilindrada' style=''>{$filas['cilindrada']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='potencia' style=''>{$filas['potencia']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='transmision' style=''>{$filas['transmision']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='ciclo' style=''>{$filas['ciclo']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='refrigeracion' style=''>{$filas['refrigeracion']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='cilindros' style=''>{$filas['cilindros']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='regimen_potencia' style=''>{$filas['regimen_potencia']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='arranque' style=''>{$filas['arranque']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='traccion' style=''>{$filas['traccion']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='distancia_ejes' style=''>{$filas['distancia_ejes']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='rueda_delantera' style=''>{$filas['rueda_delantera']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='rueda_trasera' style=''>{$filas['rueda_trasera']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='freno_delantero' style=''>{$filas['freno_delantero']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='freno_trasero' style=''>{$filas['freno_trasero']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='altura_asiento' style=''>{$filas['altura_asiento']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='peso' style=''>{$filas['peso']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='capacidad_deposito' style=''>{$filas['capacidad_deposito']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='compresion' style=''>{$filas['compresion']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='suspension_D' style=''>{$filas['suspension_D']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='suspension_T' style=''>{$filas['suspension_T']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='encendido' style=''>{$filas['encendido']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='caja_vel' style=''>{$filas['caja_vel']}</div>";
                              echo "</td>";
                              echo "</tr>";   
                      }

                      $sentencia2="SELECT * FROM detalles WHERE referencia='$_GET[referencia2]' "; 
                   
                      $resultado2=Conectarse()->query($sentencia2) or die (mysqli_error($conexion));
                   
                      while ($filas=$resultado2->fetch_assoc()) { 
                          extract($filas);
                         

                          echo "<tr>";
                              echo "<td>"; 
                                echo  "<div class='referencia' style=''>{$filas['referencia']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='precio' style=''>{$filas['precio']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='motor' style=''>{$filas['motor']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='cilindrada' style=''>{$filas['cilindrada']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='potencia' style=''>{$filas['potencia']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='transmision' style=''>{$filas['transmision']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='ciclo' style=''>{$filas['ciclo']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='refrigeracion' style=''>{$filas['refrigeracion']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='cilindros' style=''>{$filas['cilindros']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='regimen_potencia' style=''>{$filas['regimen_potencia']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='arranque' style=''>{$filas['arranque']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='traccion' style=''>{$filas['traccion']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='distancia_ejes' style=''>{$filas['distancia_ejes']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='rueda_delantera' style=''>{$filas['rueda_delantera']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='rueda_trasera' style=''>{$filas['rueda_trasera']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='freno_delantero' style=''>{$filas['freno_delantero']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='freno_trasero' style=''>{$filas['freno_trasero']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='altura_asiento' style=''>{$filas['altura_asiento']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='peso' style=''>{$filas['peso']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='capacidad_deposito' style=''>{$filas['capacidad_deposito']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='compresion' style=''>{$filas['compresion']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='suspension_D' style=''>{$filas['suspension_D']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='suspension_T' style=''>{$filas['suspension_T']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='encendido' style=''>{$filas['encendido']}</div>";
                              echo "</td>";
                              echo "<td>";
                                echo  "<div class='caja_vel' style=''>{$filas['caja_vel']}</div>";
                              echo "</td>";
                              echo "</tr>";   
                      }   
                  ?>
                </table>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ComparaTuMoto</h3>
            <p>
              Calle 69#91-45 <br>
              Ciudadela El Recreo<br>
              Bogota, Colombia <br><br>
              <strong>Telefono:</strong> +57 3186084980<br>
              <strong>Email:</strong> mcubaque@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links Principales</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos de Servicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de Privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Desarrollo web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Administracion de productos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Disño Grafico</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Disfruta nuestro Newsletter</h4>
            <p>Suscribete a nuestro boletin de noticias para mas informacion</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Suscribirme">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>ComparaTuMoto</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          Designed by <a href="#">mcubaque</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

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

</body>

</html>