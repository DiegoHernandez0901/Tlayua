<!DOCTYPE html>
<html lang="es_MX">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Museo de Geología - Inicia Sesión</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/igl.webp" rel="icon" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/login.css" />

  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <section class="position-relative py-4 py-xl-5 vertical-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mb-5">
            <div class="card-body d-flex flex-column align-items-center">
              <form data-aos="fade-up" data-aos-delay="50" class="text-center" method="post"
                action="forms/loginData.php">

                <div class="mb-3 text-center mx-auto">
                  <h2>Inicia Sesión</h2>
                </div>

                <div class="my-4">
                  <i class="bi bi-person-circle icono"></i>
                </div>

                <div class="mb-3 form-group">
                  <input type="email" class="form-control" id="email" name="correo" placeholder="correo electrónico"
                    required />
                </div>

                <div class="mb-3 form-group">
                  <input type="password" class="form-control" id="password" name="passwd" placeholder="contraseña"
                    required />
                </div>

                <div class="mb-3">
                  <a href="">
                    <p class="text-muted text-end">
                      <small><em>Olvidé mi contraseña</em></small>
                    </p>
                  </a>
                </div>

                <div class="mb-3">
                  <a href="register.php">
                    <p class="text-muted text-end">
                      <small><em>Registrarse</em></small>
                    </p>
                  </a>
                </div>

                <div class="mb-3">
                  <button type="submit" class="btn btn-success d-block w-100" name="enviar">
                    Enviar
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!--Archivos js adicionales-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>