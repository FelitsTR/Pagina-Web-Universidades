
<?php
    if(isset($_GET['editar'])){
        $editor_id=$_GET['editar'];
    include('conexiones/conexion.php');

    $consulta="SELECT * FROM oferta_educativa WHERE id_oferta='$editor_id'";
    $ejecutar=mysqli_query($conexion,$consulta) or die ("Error en la
        consulta a la base de datos x1");
        $columna=mysqli_fetch_array($ejecutar);
    $periodo_academico = $columna['periodo_academico'];
    $carrera = $columna['carrera'];
    $descripcion = $columna['descripcion'];
    $objetivo = $columna['objetivo'];
    $perfil_ingreso = $columna['perfil_ingreso'];
    $perfil_egreso = $columna['perfil_egreso'];
    $plan_estudio = $columna['plan_estudio'];
    $carrera_video = $columna['carrera_video'];
    $tipo_carrera = $columna['tipo_carrera'];
    $src_doc = $columna['src_doc'];
    $years = $columna['years'];
    $meses = $columna['meses'];
    $img_ofer_1=$columna['img_ofer_1'];
    $img_ofer_2=$columna['img_ofer_2'];
    $img_ofer_3=$columna['img_ofer_3'];
        
    }
?>

<br>
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
                <h4 class="h4">Oferta Educativa</h4>
              </div>
              <form action="" method="POST" id="note-form" class="card-body">
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
                    <div name="carrera" class="form-group">
                      <input required type="text" id="carrera" placeholder="Carrera" class="form-control descrip" value="<?php echo $carrera ?>" name="carrera" />
                    </div>
                    <div class="form-group">
                      <input required type="text" id="periodo_academico" placeholder="Periodo Academico" class="form-control descrip" value="<?php echo $periodo_academico ?>" name="periodo_academico" />
                    </div>
                    <div name="years" class="form-group">
                      <input required type="text" id="years" placeholder="Años" class="form-control descrip" value="<?php echo $years ?>"  name="years" />
                    </div>
                    <div name="meses" class="form-group">
                      <input required type="number" id="meses" placeholder="Meses" class="form-control descrip" value="<?php echo $meses?>" name="meses" />
                    </div>
                    <div class="form-group">
                      <textarea required id="descripcion" name="descripcion" cols="30" rows="10" class="form-control descrip" value="" placeholder="Descripción de la carrera"><?php echo $descripcion ?></textarea>
                    </div>
                    <div class="form-group">
                      <textarea required id="objetivo" name="objetivo" cols="30" rows="10" class="form-control descrip" placeholder="Objetivo de la carrera"><?php echo $objetivo ?></textarea>
                    </div>
                    <div class="form-group">
                      <textarea required id="perfil_ingreso" name="perfil_ingreso" cols="30" rows="10" class="form-control descrip" value="" placeholder="Perfil ingreso"><?php echo $perfil_ingreso ?></textarea>
                    </div>
                    <div class="form-group">
                      <textarea required id="perfil_egreso" name="perfil_egreso" cols="30" rows="10" class="form-control descrip" value="" placeholder="Perfil egreso"><?php echo $perfil_egreso ?></textarea>
                    </div>
                    <div name="tipo_carrera" class="form-group">
                      <input required type="text" id="tipo_carrera" placeholder="Tipo de carrera" class="form-control descrip"  value="<?php echo $tipo_carrera ?>" name="tipo_carrera" />
                    </div>
                  </div>
                  <div id="Ocultar_2">
                    <div name="img_ofer_1" class="form-group">
                      <input required type="url" id="img_ofer_1" placeholder="Imagen 1" class="form-control descrip" value="<?php echo $img_ofer_1 ?>" name="img_ofer_1" />
                    </div>
                    <div name="img_ofer_2" class="form-group">
                      <input required type="url" id="img_ofer_2" placeholder="Imagen 2" class="form-control descrip" value="<?php echo $img_ofer_2 ?>" name="img_ofer_2" />
                    </div>
                    <div name="img_ofer_3" class="form-group">
                      <input required type="url" id="img_ofer_3" placeholder="Imagen 3" class="form-control descrip" value="<?php echo $img_ofer_3 ?>" name="img_ofer_3" />
                    </div>
                    <div name="carrera_video" class="form-group">
                      <input required type="url" id="carrera_video" placeholder="Video" class="form-control descrip" value="<?php echo $carrera_video ?>"
                        name="carrera_video" />
                    </div>
                    <div name="src_doc" class="form-group">
                      <input required type="url" id="src_doc" placeholder="Documento" class="form-control descrip" value="<?php echo $src_doc ?>"  name="src_doc" />
                    </div>
                    <div name="plan_estudio" class="form-group">
                      <input required type="url" id="plan_estudio" placeholder="Plan de estudio" class="form-control descrip" value="<?php echo $plan_estudio ?>" name="plan_estudio" />
                    </div>
                  </div>
                <input type="submit" value="Guardar" class="btn btn-primary btn-block button-submit" name="actualizar" />
                <script>
                  document.getElementById("Ocultar_1").style.display = "none";
                  document.getElementById("Ocultar_2").style.display = "none";
                </script>
              </form>
              
            </div>
          </div>
        </div>

<?php
    if(isset($_POST['actualizar'])){
        include('conexiones/conexion.php');
  /*   $actualizar_id=$_POST['id'];
    $actualizar_nombre=$_POST['nombre'];
    $actualizar_telefono=$_POST['telefono'];
    $actualizar_email=$_POST['email'];
    $actualizar_costoinscrip=$_POST['costoinscrip'];
    $actualizar_costoreins=$_POST['costoreins']; */

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
    
    $actualizar="UPDATE oferta_educativa SET id_universidad='$admin',periodo_academico='$periodo_academico ',carrera='$carrera',descripcion='$descripcion',objetivo='$objetivo',perfil_ingreso='$perfil_ingreso',perfil_egreso='$perfil_egreso',plan_estudio='$plan_estudio ',carrera_video='$carrera_video',tipo_carrera='$tipo_carrera',src_doc='$src_doc',years='$years',meses='$meses',img_ofer_1='$img_ofer_1',img_ofer_2='$img_ofer_2',img_ofer_3='$img_ofer_3' WHERE id_oferta='$editor_id' ";
    
    // $actualizar="UPDATE universidad SET id='$actualizar_id', nombre='$actualizar_nombre', telefono='$actualizar_telefono',
    // email='$actualizar_email',costoinscrip='$actualizar_costoinscrip',costoreins='$actualizar_costoreins'  WHERE id='$editor_id'";

    $ejecutar=mysqli_query($conexion,$actualizar) or die ("Error en la
        consulta a la base de datos x2");
    
    if($ejecutar){
        echo "<script>alert('Datos actualizado')</script>";
        echo "<script>window.open('form_ofe.php','_self')</script>";

    }
    }
?>