<?php
  session_start();
  $admin=$_SESSION['id_uni'];
  if($admin >0){
    header('Locate:index.php');
  }
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
          <h1 class="text-light">Feria Virtual</a></h1>
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
        <table class="table table-hover table-bordered table-responsive-md" id="tabla1">
    <thead class="thead-green">
        <tr>
            <th>Carrera</th>
            <th>Periodo Academico</th>
            <th>Tipo de carrera</th>
            <th>Borrar</th>
            <th>Editar</th>
        </tr>
    </thead>
    <?php
        include('conexiones/conexion.php');
        $carrera=array();
        $periodo_academico=array();
        $tipo_carrera=array();
        
        $consulta="SELECT * FROM oferta_educativa WHERE id_universidad = '$admin'";
        $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la
        consulta a la base de datos");
        
        while($columna=mysqli_fetch_array($ejecutar)){
          $id_oferta=$columna['id_oferta'];
          $carrera=$columna['carrera'];
          $periodo_academico=$columna['periodo_academico'];
          $tipo_carrera=$columna['tipo_carrera'];
    ?>
    <tr align="center">
    <td><?php echo $carrera; ?></td>
    <td><?php echo $periodo_academico; ?></td>
    <td><?php echo $tipo_carrera; ?></td>
    <td><a href="form_ofe.php?borrar=<?php echo $id_oferta; ?>">Borrar</a></td>
    <td><a href="form_ofe.php?editar=<?php echo $id_oferta; ?>">Editar</a></td>
    </tr>
        <?php } ?>
    </table>
    
        
      <br>
  
    </section>
    <?php
/*     if(isset($_POST['Guardar2']))
    {
          $id_universidad = $admin;
          $periodo_academico = $_POST['periodo_academico'];
          $carrera = $_POST['carrera'];
          $descripcion = $_POST['descripcion'];
          $objetivo = $_POST['objetivo'];
          $perfil_ingreso = $_POST['perfil_ingreso'];
          $perfil_egreso = $_POST['perfil_egreso'];
          $plan_estudio = $_POST['plan_estudio'];
          $carrera_video = $_POST['carrera_video'];
          $tipo_carrera = $_POST['tipo_carrera'];
          $src_doc = $_POST['src_doc'];
          $years = $_POST['years'];
          $meses = $_POST['meses'];
          $img_ofer_1=$_POST['img_ofer_1'];
          $img_ofer_2=$_POST['img_ofer_2'];
          $img_ofer_3=$_POST['img_ofer_3'];
        $stm3 = "INSERT INTO oferta_educativa (id_universidad, periodo_academico, carrera, descripcion, objetivo, perfil_ingreso, perfil_egreso, plan_estudio, carrera_video, tipo_carrera, src_doc, years, meses, img_ofer_1, img_ofer_2, img_ofer_3) VALUES ('$id_universidad','$periodo_academico','$carrera','$descripcion','$objetivo','$perfil_ingreso','$perfil_egreso','$plan_estudio','$carrera_video','$tipo_carrera','$src_doc','$years','$meses','$img_ofer_1','$img_ofer_2','$img_ofer_3')";
        $query3 = mysqli_query($conexion, $stm3);
        if($query3){
          echo "Se han insertado correcatamento los datos";
        }
        else{
          echo "Error en la insercion";
        }
    }  */
    ?>
    <?php
        if(isset($_GET['editar'])){
            include("edit_carr.php");
        }
    ?>
    
    <?php
        if(isset($_GET['borrar'])){
            $borrar_id=$_GET['borrar'];
            $borrar="DELETE FROM oferta_educativa WHERE id_oferta ='$borrar_id'";
            $ejecutar=mysqli_query($conexion,$borrar);
            if($ejecutar){                
                echo "<script>alert('Universidad eliminada')</script>";
                echo "<script>window.open('form_ofe.php','_self')</script>";
            }
        }
    ?> 

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