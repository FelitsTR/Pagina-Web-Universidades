<?php
  session_start();
  $usuario=$_SESSION['id_usu'];
  echo '<script> alert("Bienvenido '.$usuario.'"); </script>';
  //falta arreglarlo
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Universidad Ejemplo</title>
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
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
 <!-- ======= Header ======= -->
 <div class="row align-items-center justify-content-center  w-100" id="container-fluid">
  <div class="col-sm-4 align-items-center">
    <img src="assets/img/topbar_logo_1.jpg" class="img-logo-1" alt="">
    <img src="assets/img/topbar_logo_2.jpg" class="img-logo-2" alt="">
  </div>
  <div class="col-sm-4">

  </div>
  <div class="col-sm-4 row justify-content-center">
    <img src="assets/img/ceiba_cuadrado-favicon.png" class="img-logo-3" alt="">
    <img src="assets/img//topbar_logo_3.png" class="img-logo-4" alt="">
  </div>
</div>
<nav class="Probando">

  <header id="header" class="d-flex align-items-center  header-transparent">

    <div class="container d-flex align-items-center">

    <div class="logo mr-auto">
      <h1 class="text-light"><a href="index.html">Feria Virtual</a></h1>

    </div>

    <nav class="el-menu">
      <input type="checkbox" id="btn-menu">
      <label id="iconoMenu" for="btn-menu"><img src="images/icons/icono-menu.png" height="30px"></label>
      
      <ul class="menu">
        <li><a href="universidades_usu.php">Inicio</a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </div>

 </nav>
  </header> <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Universidad Ejemplo</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Mi universidad</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container" data-aos="fade-up">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="assets/img/portafolio/portfolio-details-1.jpg" class="img-fluid" alt="">
            <img src="assets/img/portafolio/portfolio-details-2.jpg" class="img-fluid" alt="">
            <img src="assets/img/portafolio/portfolio-details-3.jpg" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Contacto</h3>
            <ul>
              <li><strong>Teléfono</strong>: 9982153515</li>
              <li><strong>Direccion</strong>: Dirección Ejemplo</li>
              <li><strong>Correo Electronico</strong>: <a href="#">CorreoEjemplo@ejemplo.eje</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Ejemplo de introducción a universidad</h2>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div>
        <div class="portfolio-description">
          <h2>Contenido Multimedia</h2>
          <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/W5EWhwrf1R4"></iframe>
          </div>
        </div>
        <div class="portfolio-description">
          <h2>Oferta educativa</h2>
          <h5><a href="javascript:document.getElementById('carrera1-oculta').style.display='block';void0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Licenciatura en Administración</a></h5>
          <div id="carrera1-oculta">
            <p>
              Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
          </div>
          <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ingenieria en Software</h5>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div>
      </div>
    </div>
    </section>
    <!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>UPQROO</h3>
      <p>Av. Arco Bicentenario, Mza. 11, Lote 1119-33, SM. 255. Cancún, Quintana Roo, México. C.P. 77500</p>
      <div class="social-links">
        <a href="https://twitter.com/upqroo" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/upqroo" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCy6VTWYIB9tay8P28cPe6Eg" class="youtube" target="_blank"><i class="bx bxl-youtube"></i></a>
      </div>
      <div>
      </div>
        ¿Quieres promocionar tu universidad de Quintana Roo? <br> Contáctanos por <a href="mailto:feriauniversitariaqroo@gmail.com?">feriauniversitariaqroo@gmail.com</a>
      <div class="copyright">
        <br>&copy; Copyright <strong><span>UPQROO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Diseñado por la <a href="http://www.upqroo.edu.mx/" target="_blank">Universidad Politecnica de Quintana Roo</a><br>
        <br>¿Tienes problemas con la página? <a href="javascript:document.getElementById('soporte').style.display='block';void0">Mandanos un mensaje</a>
        <div id="soporte">
          <br><textarea name="textareasoporte" id="" cols="50" rows="5" placeholder="Describe tu problema"></textarea>
          <div class="boton-soporte">
            <br><button type="submit">Enviar mensaje</button>
          </div>
        </div> 
      </div>
    </div>

    <!-- ======= Top Bar ======= -->

  </footer>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>