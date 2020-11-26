<?php
include('conexiones/conexion.php');
if(isset($_POST['Mensaje'])){
    $falla = $_POST['falla'];
    $query = ("INSERT INTO comentarios (falla) VALUE ('$falla')");
    $Result = mysqli_query($conexion, $query);
    echo '<script> alert("Mensaje enviado, gracias por notificar"); </script>';
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feria Virtual Universitaria de Quintana Roo 2020</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <link href="assets/img/ceiba_cuadrado-favicon.png" rel="icon" type="image/png">
  <link href="assets/img/ceiba_cuadrado-favicon.png" rel="apple-touch-icon" type="image/png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!--Casi Descartad0-->
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet"><!--Checar esto desués-->
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> <!--Casi Descartad0-->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet"><!--Descartad0-->
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet"><!--Descartad0-->
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet"> <!--Casi Descartad0-->
  <link href="assets/vendor/venobox/venobox.min.css" rel="stylesheet"> <!--Casi Descartad0-->
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> <!--Casi Descartad0-->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet"> <!--Casi Descartad0-->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 
</head>

<body>


  <!-- ======= Header ======= -->
  <div class="row align-items-center justify-content-center w-100" id="container-fluid">
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
   <!-- 
  <header id="header"  class="fixed-top d-flex align-items-center  header-transparent ">
    -->
    <header id="header" class="d-flex align-items-center  header-transparent">

      <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Feria Virtual</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <!--<nav class="nav-menu d-none d-lg-block">-->
        <nav class="el-menu">
          <input type="checkbox" id="btn-menu">
          <label id="iconoMenu" for="btn-menu"><img src="images/icons/icono-menu.png" height="30px"></label>
          
          <ul class="menu">
            <li><a href="login_usu.php">Iniciar sesión</a></li>
            <li><a href="register.php">Registrarse</a></li>
          </ul>
      
      
        </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->
      
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Imagen 1</h2>
          <p class="animate__animated fanimate__adeInUp">Lorem sdfsdfsdfsdf</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ver más</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Imagen 2</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ver más</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Imagen 3</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ver más</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Acerca De</h2>
          <p>¡BIENVENIDOS¡</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-9">
            <p>
            FERIA VIRTUAL UNIVERSITARIA
            </p>
            <p>
              Evento estatal que reúne a todos los Programas Educativos de nivel
              superior, en un esfuerzo por acercar la Oferta Educativa a todos los jóvenes
              que quieren continuar su formación cursando una carrera universitaria.
            </p>
            
          </div>
          <div class="col-lg-3">
            <br><br>
            <a href="login.html" class="btn-learn-more">Saber más</a>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->
    
    <!-- ======= Features Section =======-->
    <section id="features" class="features">
      <div class="container">

        

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-1 mt-lg-0">
                <h3>Test Vocacional</h3>
                <p class="font-italic">
                  ¿Aún no sabes qué estudiar?
                </p>
                <ul> 
                  <li><i class="ri-check-double-line"></i> El test de orientación vocacional ayuda a esclarecer las mejores opciones para tu futuro, basándose en intereses, aptitudes, debilidades, entre otras características personales </li>              
                  <li><i class="ri-check-double-line"></i> El objetivo de esta herramienta es guiar y señalar dónde podrías prosperar profesionalmente.</li>
                </ul>
                <center><a class="btn btn-info btn-lg" href="http://www.decidetusestudios.sep.gob.mx/vista/test-vocacional/" target="_blank" -role="button" >Realizar Test</a></center>
                <!--<img src="assets/img/features-1.png" alt="" class="img-fluid"> -->
              </div>
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 text-center mt-5">
                 <h3>Visitas</h3>
                  <div> 
                    <a title="contador de visitas" class="row justify-content-center"><img src="https://counter3.stat.ovh/private/contadorvisitasgratis.php?c=fzcl3duq6pzwbs3tagf2pqkr56zcljqy" ></a>
                  </div>
                
                
              </div>
               
            </div>
          </div>

    <!-- ======= Team Section ======= -->
     <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Equipo</h2>
          <p>Nuestro Equipo de Desarrollo</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/profile.php?id=100016759814406" target="_blank"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/xnobleswag?r=nametag" target="_blank"><i class="icofont-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Erick Espinoza</h4>
                <span>
                  El que le gusta complicarse la vida
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/sandra.ascencio.92" target="_blank"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/sandra_asc/?hl=es-la" target="_blank"><i class="icofont-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sandra Ascencio</h4>
                <span>La patrona del diseño :3</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/profile.php?id=100041210151495" target="_blank" ><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/felits.tr/?hl=es-la" target="_blank"><i class="icofont-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Felix Torres</h4>
                <span>El guapo del grupo</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/azael.caos" target="_blank"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/aza.el_sith/?hl=es-la" target="_blank"><i class="icofont-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Azael</h4>
                <span>El que se rifa al final con el proyecto</span>
              </div>
            </div>
          </div>

         <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/img/team/team-romo.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/luisfernando.lopezromo.7" target="_blank"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/fernando_romo43/?hl=es-la" target="_blank"><i class="icofont-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Romo</h4>
                <span>
                    Es romo pelón
                </span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> <!-- End Team Section -->


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
      <div class="copyright">
        &copy; Copyright <strong><span>UPQROO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Diseñado por la <a href="http://www.upqroo.edu.mx/" target="_blank">Universidad Politecnica de Quintana Roo</a>
        <form method="POST">
          <br>¿Tienes problemas con la pagina? <a href="javascript:document.getElementById('soporte').style.display='block';void0">Mandanos un mensaje</a>
          <div id="soporte">
            <br><textarea name="falla" id="" cols="50" rows="5" placeholder="Describe tu problema"></textarea>
            <div class="boton-soporte">
              <br><button name="Mensaje" type="submit">Enviar mensaje</button>
            </div>
          </div>      <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        </form>

      </div>
    </div>

    <!-- ======= Top Bar ======= -->

  </footer><!-- End Footer -->

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