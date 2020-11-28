<?php
  session_start();
  $admin=$_SESSION['id_uni'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feria Virtual Universitaria de Quintana Roo 2020</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <link href="assets/img/ceiba_cuadrado-favicon.png" rel="icon" type="image/png">
  <link href="assets/img/ceiba_cuadrado-favicon.png" rel="apple-touch-icon" type="image/png">

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
          <h1 class="text-light"><a href="index.php">Feria Virtual</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="el-menu">
          <input type="checkbox" id="btn-menu">
          <label id="iconoMenu" for="btn-menu"><img src="images/icons/icono-menu.png" height="30px"></label>
        
          <ul class="menu">
            <li><a href="universidades_uni.php">Inicio</a></li>
            <li><a href="vista_uni_uni.php">Mi Universidad</a></li>
          </ul>
        </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->
   </nav>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>INFORMACIÓN</h2>
          <p>ADMINISTRA TU INFORMACIóN AQUÍ</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-9">
            

            <?php include('conexiones/conexion.php'); ?>
            <?php
              require('conexiones/conexion_m.php');
                $query_m = "SELECT id_municipio, nombre_muni FROM municipio ORDER BY nombre_muni ASC";
                $resultado_m = $mysqli->query($query_m);
            ?>
      <!-- Datos Generales -->

      <div class="card box mt-4 card-child">
        <div class="card-header head">
          <h4 class="h4">Datos Generales</h4>
        </div>
        <form action="insert_crud.php" method="POST" id="note-form" class="card-body">
          <input id="opc_1" name="Opciones1" type="radio" value="Opciones" onchange="funcion1()">
          Información
          <input id="opc_2" name="Opciones1" type="radio" value="Opciones" onchange="funcion1()">
          Archivos y documentos
          <div id="changeForm"></div>
            <script>
              function funcion1(){
                document.getElementById("Ocultar_1").style.display = "none";
                document.getElementById("Ocultar_2").style.display = "none";
                var opc_1 = document.getElementById("opc_1");
                var opc_2 = document.getElementById("opc_2");
                if(opc_1.checked){
                  document.getElementById("Ocultar_1").style.display = "block";
                  //document.getElementById("changeForm").innerHTML = "Ano";
                }
                if(opc_2.checked){
                  document.getElementById("Ocultar_2").style.display = "block";
                  //document.getElementById("changeForm").innerHTML = "A";
                }
              }
            </script>
          <div id="Ocultar_1">
            <div name="Nombre_Universidad" class="form-group">
              <input required type="text" id="nombre_uni" placeholder="Nombre Universidad" class="form-control descrip" name="nombre_uni" />
            </div>
            <select required name="id_municipio" class="form-group">
              <option value="0">Municipio</option>
              <?php while($row = $resultado_m->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_municipio']; ?>"><?php echo $row['nombre_muni']; ?></option>
              <?php } ?>
            </select>
            <div name="telefono_uni" class="form-group">
              <input required type="text" id="telefono_uni" placeholder="Telefono" class="form-control descrip" name="telefono_uni" />
            </div>
            <div name="correo_uni" class="form-group">
              <input required type="text" id="correo_uni" placeholder="Correo" class="form-control descrip" name="correo_uni" />
              </div>
            <div name="longitud" class="form-group">
              <input required type="text" id="longitud" name="longitud" cols="30" rows="10" class="form-control descrip" placeholder="Longitud"></input>
            </div>
            <div name="latitud" class="form-group">
              <input required type="text" id="latitud" name="latitud" cols="30" rows="10" class="form-control descrip" placeholder="Latitud"></input>
            </div>
            <div name="facebook" class="form-group">
              <input required type="text" id="facebook" placeholder="Facebook" class="form-control descrip" name="facebook" />
            </div>
            <div name="whatsapp" class="form-group">
              <input required type="text" id="whatsapp" placeholder="Whatsapp" class="form-control descrip" name="whatsapp" />
            </div>
          </div>
          <div id="Ocultar_2">
            <div name="logo_uni" class="form-group">
              <input required type="text" id="logo_uni" placeholder="Logo" class="form-control descrip" name="logo_uni" />
            </div>
            <div name="src_imagenes_uni" class="form-group">
              <input required type="text" id="src_imagenes_uni" placeholder="Imagen" class="form-control descrip" name="src_imagenes_uni" />
            </div>
            <div name="src_video" class="form-group">
              <input required type="text" id="src_video" placeholder="Video" class="form-control descrip" name="src_video" />
            </div>
            <div name="nombre_conferencia" class="form-group">
              <input required type="text" id="nombre_conferencia" placeholder="Descripción de la conferencia" class="form-control descrip" name="nombre_conferencia" />
            </div>
            <div name="src_conferencia" class="form-group">
              <input required type="text" id="src_conferencia" placeholder="Conferencia" class="form-control descrip" name="src_conferencia" />
            </div>
          </div>
          <div class="card-header head">

          <!-- Oferta Educativa -->

          <h4 class="h4">Oferta Educativa</h4>
          </div><br>
            <input id="opc1" name="Opciones2" type="radio" value="Opciones" onchange="funcion()">
            Información
            <input id="opc2" name="Opciones2" type="radio" value="Opciones" onchange="funcion()">
            Archivos y documentos
            <div id="changeForm"></div>
              <script>
                function funcion(){
                  document.getElementById("Ocultar1").style.display = "none";
                  document.getElementById("Ocultar2").style.display = "none";
                  var opc1 = document.getElementById("opc1");
                  var opc2 = document.getElementById("opc2");
                  if(opc1.checked){
                    document.getElementById("Ocultar1").style.display = "block";
                    //document.getElementById("changeForm").innerHTML = "Ano";
                  }
                  if(opc2.checked){
                  document.getElementById("Ocultar2").style.display = "block";
                  //document.getElementById("changeForm").innerHTML = "A";
                  }
                }
              </script>
              <div id="Ocultar1">
                <div name="carrera" class="form-group">
                  <input required type="text" id="carrera" placeholder="Carrera" class="form-control descrip" name="carrera" />
                </div>
                <div class="form-group">
                  <input required type="text" id="periodo_academico" placeholder="Periodo Academico" class="form-control descrip" name="periodo_academico" />
                </div>
                <div name="years" class="form-group">
                  <input required type="text" id="years" placeholder="Años" class="form-control descrip" name="years" />
                </div>
                <div name="meses" class="form-group">
                  <input required type="text" id="meses" placeholder="Meses" class="form-control descrip" name="meses" />
                </div>
                <div class="form-group">
                  <textarea required id="descripcion" name="descripcion" cols="30" rows="10" class="form-control descrip" placeholder="Descripción de la carrera"></textarea>
                </div>
                <div  class="form-group">
                  <textarea required id="objetivo" name="objetivo" cols="30" rows="10" class="form-control descrip" placeholder="Objetivo de la carrera"></textarea>
                </div>
                <div name="tipo_carrera" class="form-group">
                  <input required type="text" id="tipo_carrera" placeholder="Tipo de carrera" class="form-control descrip" name="tipo_carrera" />
                </div>
              </div>
              <div id="Ocultar2">
                <div name="src_imagenes_carrera" class="form-group">
                  <textarea required id="src_imagenes_carrera" name="src_imagenes_carrera" cols="30" rows="10" class="form-control descrip" placeholder="Imagen"></textarea>
                </div>
                <div name="perfil_ingreso" class="form-group">
                  <input required type="text" id="perfil_ingreso" placeholder="Perfil de Ingreso" class="form-control descrip" name="perfil_ingreso" />
                </div>
                <div name="perfil_egreso" class="form-group">
                  <input required type="text" id="perfil_egreso" placeholder="Perfil de Egreso" class="form-control descrip" name="perfil_egreso" />
                </div>
                <div name="plan_estudio" class="form-group">
                  <input required type="text" id="plan_estudio" placeholder="Plan de Estudio" class="form-control descrip" name="plan_estudio" />
                </div>
                <div name="carrera_video" class="form-group">
                  <input required type="text" id="carrera_video" placeholder="Video" class="form-control descrip" name="carrera_video" />
                </div>
                <div name="src_doc" class="form-group">
                  <input required type="text" id="src_doc" placeholder="Documento" class="form-control descrip" name="src_doc" />
                </div>
              </div>
            </div>
              <script>
                document.getElementById("Ocultar_1").style.display = "none";
                document.getElementById("Ocultar_2").style.display = "none";
                document.getElementById("Ocultar1").style.display = "none";
                document.getElementById("Ocultar2").style.display = "none";
              </script>
              <input type="submit" value="Guardar" class="btn btn-primary btn-block button-submit" name="Guardar" />
            </form>
          </div>
        </div>
      </div>
    </div>

          </div>
        </div>
      </div>
    </section>

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