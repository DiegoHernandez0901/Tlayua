<!DOCTYPE html>

<html lang="es_MX">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Museo de Geología - Instituto de Geología UNAM</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/igl.webp" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

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

  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="registro">
  <section class="position-relative py-4 py-xl-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <h1 class="bg-dark">Registro</h1>
        </div>
      </div>

      <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-xl-8">
          <div class="card mb-5">
            <div class="card-body d-flex flex-column">

              <form class="" data-aos="fade-up" data-aos-delay="50" method="post" action="forms/registerData.php">
                <div class="mb-3 form-group">
                  <label for="name" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="name" name="nombre" aria-describedby="nombreCompleto"
                    placeholder="Escribe tu nombre(s)..." />

                  <label for="lastName" class="form-label">Apellidos</label>
                  <input type="text" class="form-control" id="lastName" name="apellido" aria-describedby="apellidos"
                    placeholder="Escribe tus apellidos..." required />
                </div>

                <div class="mb-3 form-group">
                  <label for="number" class="form-label">Teléfono</label>
                  <input type="tel" class="form-control" id="number" name="telefono" />
                </div>

                <div class="mb-3 form-group">
                  <label for="correo" class="form-label">Correo electrónico</label>
                  <input type="email" class="form-control" id="email" name="correo" placeholder="name@example.com" />
                </div>

                <div class="mb-3 form-group">
                  <label for="contraseña" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="passwd" />
                </div>

                <div class="mb-3 form-group">
                  <label for="estudiante" class="form-label">¿Eres estudiante?</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="si" name="opcion" value="si" />
                    <label class="form-check-label" for="si">Sí</label>
                  </div>
                  <div class="form-check form-check-inline form-group">
                    <input class="form-check-input" type="radio" id="no" name="opcion" value="no" />
                    <label class="form-check-label" for="no">No</label>
                  </div>
                  <br />
                </div>
                <!--
                <div class="mb-3 form-group" id="tipoEscuela" style="display: none">
                  <label for="tipoEscuela" class="form-label">Tipo de escuela</label>
                  <div class="form-check form-check-inline form-group">
                    <input class="form-check-input" type="radio" id="publica" name="escuelaPub" value="publica" />
                    <label class="form-check-label" for="publica">Publica</label>
                  </div>
                  <div class="form-check form-check-inline form-group">
                    <input class="form-check-input" type="radio" id="privada" name="escuelaPri" value="privada" />
                    <label class="form-check-label" for="privada">Privada</label>
                  </div>
                  <br />
                </div>

                <div class="mb-3 form-group" id="grado" style="display: none">
                  <label for="grado" class="form-label">Grado académico</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="primaria" name="gPrimaria" value="primaria" />
                    <label class="form-check-label" for="publica">Primaria</label>
                  </div>
                  <div class="form-check form-check-inline form-group">
                    <input class="form-check-input" type="radio" id="secundaria" name="gSecundaria"
                      value="secundaria" />
                    <label class="form-check-label" for="publica">Secundaria</label>
                  </div>
                  <div class="form-check form-check-inline form-group">
                    <input class="form-check-input" type="radio" id="bachillerato" name="gBachillerato"
                      value="bachillerato" />
                    <label class="form-check-label" for="publica">Bachillerato</label>
                  </div>
                  <div class="form-check form-check-inline form-group">
                    <input class="form-check-input" type="radio" id="universidad" name="gUniversidad"
                      value="universidad" />
                    <label class="form-check-label" for="publica">Universidad</label>
                  </div>
                </div>

                <div class="mb-3 form-group" id="escuelaProcedencia" style="display: none">
                  <label for="escuela" class="form-label">Escuela de procedencia</label>
                  <select class="form-select escoge" aria-label="escogeEscuela" id="eEscuela" name="unam">
                    <option selected>Selecciona una opción</option>
                    <option value="1">UNAM</option>
                    <option value="2">Otra institución</option>
                  </select><br />
                </div>

                <div class="mb-3 form-group" id="nombreEscuela" style="display: none">
                  <label for="nombreEscuela" class="form-label">Nombre de la institución</label>
                  <input type="text" class="form-control" id="nombreEscuela" name="nEscuela" />
                </div>-->

                <div class="mb-3 form-group" id="precioB">
                  <label for="pago" class="form-label">Total a pagar</label>
                  <span>$</span><span id="precio"></span>
                </div>

                <button type="submit" class="btn btn-success" name="enviar">
                  Enviar
                </button>
                <a class="btn btn-warning" href="index.html">Cancelar</a>
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
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!--Archivos js adicionales-->
  <script src="assets/js/compra.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>