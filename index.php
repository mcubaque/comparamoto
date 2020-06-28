<?php
// connect to database
include 'modelo/conexion.php';
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
  <link href="vista/assets/img/favicon.png" rel="icon">
  <link href="vista/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- CDN JQUERY -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->
  <link href="vista/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vista/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vista/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vista/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vista/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vista/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vista/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="vista/assets/css/style.css" rel="stylesheet">

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
        <div class="logo ">
          <h1 class="text-light"><a href="index.php"><span>ComparaTuMoto</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">

          <ul>
            <li class="active"><a href="#header">Inicio</a></li>
            <li><a href="#about">Nosotros</a></li>
            <li><a href="#services">Servicios</a></li>
            <!-- <li><a href="#portfolio">Portfolio</a></li> -->
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
            <li><a href="#team">Equipo.</a></li>
            <li><a href="#contact">Contacto</a></li>
          </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="btn btn-success" id="myBtn">Login</button> 
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>¿Buscas la mejor opcion pero aun no te decides?</h1>
      <h2>Te enseñamos en dos simples pasos tu mejor alternativa!</h2>
      <a href="#why-us" class="btn-get-started scrollto">Compara ahora</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <img src="vista/assets/img/clients/client-7.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
            <img src="vista/assets/img/clients/client-8.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
            <img src="vista/assets/img/clients/client-9.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
            <img src="vista/assets/img/clients/client-10.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
            <img src="vista/assets/img/clients/client-11.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
            <img src="vista/assets/img/clients/client-12.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6 col-xs-12" data-aos="fade-center" data-aos-delay="100">
            <h2>Compara Tu Moto es el lugar indicado</h2>
            <h3>Simplemente te ponemos la informacion a la mano. Tu comparas, tu analizas, tu decides. </h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              Este sitio cuenta con toda la informacion de los principales distribuidores y marcas de motocicletas en Colombia. Sabemos lo complicado que puede llegar a ser encontrar la informacio que buscas en decenas de paginas, por ello hemos unificado en un solo lugar toda la informacion relevante de tus marcas favoritas. Aqui encontraras...
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Todos los distribuidores del pais</li>
              <li><i class="ri-check-double-line"></i> Tus marcas favoritas</li>
              <li><i class="ri-check-double-line"></i> Fichas tecnicas comparativas...</li>
            </ul>
            <!-- <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">150</span>
            <p>Marcas</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">100</span>
            <p>Distribuidores</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1000000</span>
            <p>Comparaciones</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1</span>
            <p>Unico Lugar</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center text-center align-items-stretch" data-aos="fade-right">
            <div class="content">
              <p>
                 <form action="vista/compara.php" method="get" name="f1">
                 <h3>Moto 1</h3> 
                    <select name=marca1 onchange="cambia_referencia1()"> 
                    <option value="0" selected>Seleccione... 
                    <option value="1">Aprilia 
                    <option value="2">Akt 
                    <option value="3">Bajaj 
                    <option value="4">Benelli 
                    </select>
                    
                    <select name=referencia1> 
                    <option value="-">- 
                    </select>
                  <br>
                  <br>

                  <h3>Moto 2</h3> 
                    <select name=marca2 onchange="cambia_referencia2()"> 
                    <option value="0" selected>Seleccione... 
                    <option value="1">Aprilia 
                    <option value="2">AKT 
                    <option value="3">Bajaj 
                    <option value="4">Benelli 
                    </select>
                    
                    <select name=referencia2> 
                    <option value="-">- 
                    </select>
                    <br>
                    <br>
                    <br>
                      <div class="text-center">
                        <button type="submit" class="btn btn-info">COMPARAR</button>
                      </div> 
                  </form>


                  <script>
                  var referencias1_1=new Array("-","STX-150","Amico","Area-51","Arrecife","Atlantic-125","...");
                  var referencias1_2=new Array("-","NKD-125","RTX-150","SPECIAL-110X","FLEX-125","CR4-125","CR5-200","...");
                  var referencias1_3=new Array("-","Discover-150s","Boxer-100","Pulsar-NS-200","Pusar-RS-200","...");
                  var referencias1_4=new Array("-","TNT-25","TNT-302","TNT-600","...");

                  var todasReferencias1 = [
                    [],
                    referencias1_1,
                    referencias1_2,
                    referencias1_3,
                    referencias1_4,
                  ];

                  function cambia_referencia1(){ 
                    //tomo el valor del select del pais elegido 
                    var marca1 
                    marca1 = document.f1.marca1[document.f1.marca1.selectedIndex].value 
                    //miro a ver si el pais está definido 
                    if (marca1 != 0) { 
                        //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
                        //selecciono el array de provincia adecuado 
                        mis_referencias1=todasReferencias1[marca1]
                        //calculo el numero de provincias 
                        num_referencias1 = mis_referencias1.length 
                        //marco el número de provincias en el select 
                        document.f1.referencia1.length = num_referencias1 
                        //para cada provincia del array, la introduzco en el select 
                        for(i=0;i<num_referencias1;i++){ 
                          document.f1.referencia1.options[i].value=mis_referencias1[i] 
                          document.f1.referencia1.options[i].text=mis_referencias1[i] 
                        } 
                    }else{ 
                        //si no había provincia seleccionada, elimino las provincias del select 
                        document.f1.referencia1.length = 1 
                        //coloco un guión en la única opción que he dejado 
                        document.f1.referencia1.options[0].value = "-" 
                        document.f1.referencia1.options[0].text = "-" 
                    } 
                    //marco como seleccionada la opción primera de provincia 
                    document.f1.referencia1.options[0].selected = true 
                }

                  var referencias2_1=new Array("-","STX-150","Amico","Area-51","Arrecife","Atlantic-125","...");
                  var referencias2_2=new Array("-","NKD-125","RTX-150","SPECIAL-110X","FLEX-125","CR4-125","CR5-200","...");
                  var referencias2_3=new Array("-","Discover-150s","Boxer-100","Pulsar-NS-200","Pusar-RS-200","...");
                  var referencias2_4=new Array("-","TNT-25","TNT-302","TNT-600","...");

                  var todasReferencias2 = [
                    [],
                    referencias2_1,
                    referencias2_2,
                    referencias2_3,
                    referencias2_4,
                  ];

                  function cambia_referencia2(){ 
                    //tomo el valor del select del pais elegido 
                    var marca2 
                    marca2 = document.f1.marca2[document.f1.marca2.selectedIndex].value 
                    //miro a ver si el pais está definido 
                    if (marca2 != 0) { 
                        //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
                        //selecciono el array de provincia adecuado 
                        mis_referencias2=todasReferencias2[marca2]
                        //calculo el numero de provincias 
                        num_referencias2 = mis_referencias2.length 
                        //marco el número de provincias en el select 
                        document.f1.referencia2.length = num_referencias2 
                        //para cada provincia del array, la introduzco en el select 
                        for(i=0;i<num_referencias2;i++){ 
                          document.f1.referencia2.options[i].value=mis_referencias2[i] 
                          document.f1.referencia2.options[i].text=mis_referencias2[i] 
                        } 
                    }else{ 
                        //si no había provincia seleccionada, elimino las provincias del select 
                        document.f1.referencia2.length = 1 
                        //coloco un guión en la única opción que he dejado 
                        document.f1.referencia2.options[0].value = "-" 
                        document.f1.referencia2.options[0].text = "-" 
                    } 
                    //marco como seleccionada la opción primera de provincia 
                    document.f1.referencia2.options[0].selected = true 
                }

              </script>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <!-- <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a> -->
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Equipo</h2>
              <p>A continuacion encontrara informacion sobre el equipo de desarrollo.</p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">

              <div class="col-lg-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="vista/assets/img/team/team-12.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Marco Cubaque</h4>
                    <span>Director general</span>
                    <p>Tecnologo en Analisis y Desarrollo de Sistemas de Informacion</p>
                    <div class="social">
                      <a href="https://twitter.com/cubaque_marco"><i class="ri-twitter-fill"></i></a>
                      <a href="https://www.facebook.com/marco.cubaque.9"><i class="ri-facebook-fill"></i></a>
                      <a href="https://www.instagram.com/marcocubaque/"><i class="ri-instagram-fill"></i></a>
                      <a href="https://www.linkedin.com/in/marco-antonio-cubaque-175391159"> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                  <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section> --><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contacto</h2>
              <p>En este apartado encontrara la informacion necesaria para que se ponga en contacto con nosotros. o si lo prefiere, bien podemos contactarle..</p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3976.8110040518627!2d-74.1991006182722!3d4.62778292250023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1592175433885!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Ubicacion:</h4>
              <p>Calle 69#91-45, Ciudadela el recreo, Bogota, Colombia</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>mcubaque@gmail.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>Telefono:</h4>
                  <p>+57 3186084980</p>
                </div>
              </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Su Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Su Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Su mensaje ha sido enviado con exito. Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
          Designed by <a href="#team">mcubaque</a>
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

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="padding:40px 50px;"> 
          <form id="form1" name="form1" method="post" action="controlador/validacionlogin.php" role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input name="email" type="text" id="email" class="form-control"  placeholder="Ingrese su correo" required="">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
              <input name="password" type="password" id="password" type="text" class="form-control"  placeholder="Ingrese contraseña" required>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Recordar mis credenciales</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Aceptar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div>
      </div>
      
    </div>
  </div>

  <script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
  });
</script>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="vista/assets/vendor/jquery/jquery.min.js"></script>
  <script src="vista/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vista/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="vista/assets/vendor/php-email-form/validate.js"></script>
  <script src="vista/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="vista/assets/vendor/counterup/counterup.min.js"></script>
  <script src="vista/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vista/assets/vendor/venobox/venobox.min.js"></script>
  <script src="vista/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="vista/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="vista/assets/js/main.js"></script>

</body>

</html>