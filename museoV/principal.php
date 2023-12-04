<?php
include('../forms/sesion.php');
?>

<!DOCTYPE html>
<html lang="es_MX">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Museo de Geología - Historia y Arquitectura</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="../assets/img/igl.webp" rel="icon" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet" />

  <!-- =======================================================
      * Template Name: Restaurantly
      * Updated: Jul 27 2023 with Bootstrap v5.3.1
      * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
      * Author: BootstrapMade.com
      * License: https://bootstrapmade.com/license/
      ======================================================== -->
</head>

<body>
  <main id="main">
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-phone d-flex align-items-center"><span>5547-3948/5547-3900 ext. 102 y 106</span></i>
          <i class="bi bi-clock d-flex align-items-center ms-4"><span> Martes-Domingo: 10AM - 17PM</span></i>
        </div>

        <div class="languages d-none d-md-flex align-items-center">
          <ul></ul>
        </div>
      </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
        <a href="../index.html" class="logo me-auto me-lg-0"><img src="../assets/img/igl.webp" alt=""
            class="img-fluid" /></a>
        <h1 class="logo me-auto me-lg-0">
          <a href="../index.html">Museo Regional Mixteco-Tlayua</a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->

        <nav id="navbar" class="navbar navbar-expand-lg order-last order-lg-0">
          <ul>
            <li>
              <a class="nav-link active" href="principal.php">Inicio</a>
            </li>
            <li><a class="nav-link" href="#about">Sala Principal</a></li>
            <li>
              <a class="nav-link" href="#menu">Sala Secundaria</a>
            </li>
            <li><a class="nav-link" href="#events">Sala Tercearia</a></li>
            <li><a class="nav-link" href="#contact">Multimedia</a></li>
            <li class="dropdown d-block d-lg-none">
              <a href="#"><span><i class="bi bi-person-fill"></i><strong>
                    <?php
                    echo $_SESSION['usuario'];
                    ?>
                  </strong>

                </span> <i class="bi bi-chevron-down"></i></a>
              <ul class="">
                <li><a href="../forms/logoutData.php">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
        <div class="dropdown-center">
          <button class="btn book-a-table-btn d-none d-lg-flex dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false"><span><i class="bi bi-person-fill"></i><span> </span></span>
            <?php
            echo $_SESSION['usuario'];
            ?>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-center" href="../forms/logoutData.php">Cerrar Sesión</a></li>
          </ul>
        </div>
      </div>
    </header>
    <!-- End Header -->

    <section id="about" class="about"></section>

    <!-- ======= Menu Section ======= -->
    <section class="section-bg" id="historia">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>Historia</p>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
              <img src="../assets/img/menu/tlayuaM.jpeg" alt="" class="img-fluid" />
            </div>
            <div class="col-md-8">
              <p>
              Al reconocer en las lajas de la cantera de Tlayúa el patrimonio universal que 
              representa el material fósil ahí preservado, don Miguel contactó a personal del 
              Departamento de Paleontología del Instituto de Geología de la Universidad Nacional 
              Autónoma de México. Las primeras visitas a la Cantera causaron una profunda impresión 
              en los paleontólogos. Se encontraron con un yacimiento comparable en todos los 
              sentidos con la famosa localidad de Solenhofen, Alemania, famosa por la variedad de 
              organismos y el grado de preservación de los mismos. </p>

              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            <p>
              Una vez involucrado plenamente el Instituto de Geología de la UNAM, el proyecto 
              académico centrado en la flora y fauna fósil de Tepexi de Rodríguez y sus alrededores 
              fue tomando forma. Una serie de donativos, de fuentes tan diversas como la National 
              Science Foundation, la National Geographic Society y el Consejo Nacional de Ciencia y 
              Tecnología (sin soslayar el financiamiento de la propia UNAM), permitieron a los 
              investigadores del Instituto de Geología llevar a cabo estudios detallados de los 
              organismos maravillosamente preservados en los estratos sedimentarios del Cretácico, 
              Paleógeno y Neógeno en esta porción de la Mixteca poblana. Hasta la fecha, la investigación 
              ha resultado en decenas de publicaciones y ha sido materia de diversas tesis y disertaciones. </P>

              <p>
              Con una base firme en la investigación científica, avalada por publicaciones del más alto nivel, 
              se fue diseñando el proyecto museográfico. La inversión ha ido aumentando paulatinamente, tanto en 
              términos de dinero como en esfuerzo y concepción. El museo es, hoy en día, un digno recinto universitario.</p>

              <p>
              Inicialmente concebido como un museo de sitio, denominado Museo Pie de Vaca en alusión a huellas 
              fósiles que parecen pisadas de ganado vacuno, el museo actual tiene una visión más integral que 
              incorpora la divulgación de conceptos tanto geológicos como paleontológicos. El proyecto a futuro 
              incorpora además aspectos antropológicos y arqueológicos que permitirán subrayar la importancia 
              de esta región en estos rubros </p>

              <p>
              En términos de divulgación de la cultura, el Museo Regional Mixteco Tlayúa refrenda 
              el compromiso de la Universidad Nacional Autónoma de México.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End Menu Section -->

    <!-- ======= Menu Section ======= -->
    <section class="section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>Ubicación y Acceso</p>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <p>
              El Museo Regional Mixteco se encuentra en Tepexi de Rodríguez, Puebla, a escasa hora y media de la capital estatal.

El acceso es sencillo mediante la autopista México-Orizaba, tomando la desviación hacia el sur donde se encuentra el crucero de la carretera a Xalapa. Ocho kilómetros más adelante, uno da vuelta a la izquierda, tomando la vieja carretera Puebla-Tehuacán en dirección hacia el oriente. Recorridos tres kilómetros se encuentra una desviación hacia el sur (derecha). Siguiendo este camino, cuarenta y tres kilómetros más adelante, llega al poblado de Tepexi de Rodríguez. En la entrada del pueblo, a mano izquerda, se encuentra el Museo Regional Mixteco--Tlayúa.
              </p>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
              <img src="../assets/img/menu/tepexiM.jpg" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Menu Section -->
  </main>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Restaurantly</h3>
              <p>
                A108 Adam Street <br />
                NY 535022, USA<br /><br />
                <strong>Phone:</strong> +1 5589 55488 55<br />
                <strong>Email:</strong> info@example.com<br />
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Terms of service</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Privacy policy</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Web Development</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Product Management</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Graphic Design</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>
              Tamen quem nulla quae legam multos aute sint culpa legam noster
              magna
            </p>
            <form action="" method="post">
              <input type="email" name="email" /><input type="submit" value="Subscribe" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright
        <strong><span>Instituto de Geología - UNAM 2023</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <!--Archivos js adicionales-->
  <script src="../assets/js/compra.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>

</html>