<?php 

// if (isset($_POST['Guardar'])){

//     //ID de Universidad

//     $id_universidad = $admin;

//     // Universidad

//     $nombre_uni = $_POST['nombre_uni'];
//     $telefono_uni = $_POST['telefono_uni'];
//     $correo_uni = $_POST['correo_uni'];
//     $id_municipio = $_POST['id_municipio'];
//     $logo_uni = $_POST['logo_uni'];
//     $latitud = $_POST['latitud'];
//     $longitud = $_POST['longitud'];
//     $facebook = $_POST['facebook'];
//     $whatsapp = $_POST['whatsapp'];
//     $src_video = $_POST['src_video'];
//     $img_uni_1=$_POST['img_uni_1'];
//     $img_uni_2=$_POST['img_uni_2'];
//     $img_uni_3=$_POST['img_uni_3'];

//     // Universidades_Imagenes
    

//     //$ubicacion +=  "<iframe src='http://maps.google.com/maps?q=".$latitud.",".$longitud."&z=15&output=embed' width='500' height='600' frameborder='0' style='border:0'></iframe>";

//     // Conferencias

//     $nombre_conferencia = $_POST['nombre_conferencia'];
//     $src_conferencia = $_POST['src_conferencia'];

//     // Carrera_imagenes

    
//     // Oferta educativa

//     $periodo_academico = $_POST['periodo_academico'];
//     $carrera = $_POST['carrera'];
//     $descripcion = $_POST['descripcion'];
//     $objetivo = $_POST['objetivo'];
//     $perfil_ingreso = $_POST['perfil_ingreso'];
//     $perfil_egreso = $_POST['perfil_egreso'];
//     $plan_estudio = $_POST['plan_estudio'];
//     $carrera_video = $_POST['carrera_video'];
//     $tipo_carrera = $_POST['tipo_carrera'];
//     $src_doc = $_POST['src_doc'];
//     $years = $_POST['years'];
//     $meses = $_POST['meses'];
//     $img_ofer_1=$_POST['img_ofer_1'];
//     $img_ofer_2=$_POST['img_ofer_2'];
//     $img_ofer_3=$_POST['img_ofer_3'];

    
//     //Insercion de datos en la base de datos 
    
//     include('conexiones/conexion.php');
//     $stm1 = "INSERT INTO universidades (id_universidad, nombre_uni, telefono_uni, correo_uni, id_municipio, logo_uni, id_usu_uni, latitud, longitud, facebook, whatsapp, src_video , img_uni_1, img_uni_2, img_uni_3) VALUES ('$id_universidad','$nombre_uni','$telefono_uni','$correo_uni','$id_municipio','$logo_uni','$admin','$latitud','$longitud','$facebook','$whatsapp','$src_video', '$img_uni_1','$img_uni_2','$img_uni_3')";
//     $query1=mysqli_query($conexion, $stm1);
//     if($query1){
//         $stm2 = "INSERT INTO conferencias (id_universidad, nombre_conferencia, src_conferencia) VALUES ('$id_universidad','$nombre_conferencia','$src_conferencia')";
//         $query2 = mysqli_query($conexion, $stm2);
//         if($query2){
//                 $stm3 = "INSERT INTO oferta_educativa (id_universidad, periodo_academico, carrera, descripcion, objetivo, perfil_ingreso, perfil_egreso, plan_estudio, carrera_video, tipo_carrera, src_doc, years, meses, img_ofer_1, img_ofer_2, img_ofer_3) VALUES ('$id_universidad','$periodo_academico','$carrera','$descripcion','$objetivo','$perfil_ingreso','$perfil_egreso','$plan_estudio','$carrera_video','$tipo_carrera','$src_doc','$years','$meses','$img_ofer_1','$img_ofer_2','$img_ofer_3')";
//                 $query3 = mysqli_query($conexion, $stm3);
//                 if($query3){
//                     header('Location:universidades_usu.php');
//                 }
//                 else{
//                     echo "No servimos para nada x3";
//                 }
//             }
//         else{
//             echo "No servimos para nada x2";
//         }
//     }
//     else{
//         echo "No servimos para nada x1";
//     }
//     mysqli_close($conexion);
// }
                
                    if(isset($_POST['Guardar'])){
                        session_start();
                        $admin=$_SESSION['id_uni'];
                        $nombre_uni = $_POST['nombre_uni'];
                        $telefono_uni = $_POST['telefono_uni'];
                        $correo_uni = $_POST['correo_uni'];
                        $id_municipio = $_POST['id_municipio'];
                        $logo_uni = $_POST['logo_uni'];
                        $latitud = $_POST['latitud'];
                        $longitud = $_POST['longitud'];
                        $facebook = $_POST['facebook'];
                        $whatsapp = $_POST['whatsapp'];
                        $src_video = $_POST['src_video'];
                        $img_uni_1=$_POST['img_uni_1'];
                        $img_uni_2=$_POST['img_uni_2'];
                        $img_uni_3=$_POST['img_uni_3'];
                      // $nombre_conferencia = $_POST['nombre_conferencia'];
                      // $src_conferencia = $_POST['src_conferencia'];
                        include('conexiones/conexion.php');
                      /* $actualizar="UPDATE universidades SET id_universidad = '$admin', nombre_uni='$nombre_uni', telefono_uni = '$telefono_uni', correo_uni='$correo_uni',
                        id_municipio='$id_municipio', logo_uni='$logo_uni',id_usu_uni='$admin', latitud = '$latitud', longitud = '$longitud', facebook='$facebook' , whatsapp='$whatsapp',
                        src_video='$src_video', img_uni_1='$img_uni_1', img_uni_2='$img_uni_2', img_uni_3 = '$img_uni_3' WHERE id_universidad='$admin'"; */
                        $existe = "SELECT COUNT(*) FROM universidades WHERE id_universidad = '$admin'";
                       //$existe = "SELECT id_universidad FROM universidades WHERE EXISTS id_universidad = $admin";
                      $prueba=mysqli_query($conexion,$existe);
                     
                      if(!$prueba==true)
                      {
                       echo "Actualizado";
                      $actualizar="UPDATE universidades SET id_universidad='$admin',nombre_uni='$nombre_uni',telefono_uni='$telefono_uni',correo_uni='$correo_uni',id_municipio='$id_municipio',
                      logo_uni='$logo_uni', id_usu_uni='$admin',latitud='$latitud',longitud='$longitud',facebook='$facebook',whatsapp='$whatsapp',src_video='$src_video',img_uni_1='$img_uni_1',
                      img_uni_2='$img_uni_2', img_uni_3='$img_uni_3' WHERE id_universidad='$admin'";
                      $ejecutar=mysqli_query($conexion,$actualizar);
                      if($ejecutar){
                        echo "Si actualizo el hdsptm";
                      }else{
                        echo "True para el select";
                      } 
                      }
                      else{
                        echo "Insertado";
                        $insertar2="INSERT INTO universidades (id_universidad, nombre_uni, telefono_uni, correo_uni, id_municipio, logo_uni, id_usu_uni, latitud, longitud, facebook, whatsapp, src_video,
                      img_uni_1, img_uni_2, img_uni_3) VALUES ('$admin', '$nombre_uni', '$telefono_uni','$correo_uni','$id_municipio','$logo_uni','$admin','$latitud','$longitud','$facebook','$whatsapp',
                      '$src_video','$img_uni_1','$img_uni_2','$img_uni_3')";
                        $ejecutar2=mysqli_query($conexion,$insertar2);
                        if($ejecutar2){
                          echo "Si inserto el hdsptm";

                        }
                        else{
                          echo "False para el select";
                        }
                      } 
                      
                      

                      /* $insertar2="INSERT INTO universidades (id_universidad, nombre_uni, telefono_uni, correo_uni, id_municipio, logo_uni, id_usu_uni, latitud, longitud, facebook, whatsapp, src_video,
                      img_uni_1, img_uni_2, img_uni_3) VALUES ('$admin', '$nombre_uni', '$telefono_uni','$correo_uni','$id_municipio','$logo_uni','$admin','$latitud','$longitud','$facebook','$whatsapp',
                      '$src_video','$img_uni_1','$img_uni_2','$img_uni_3')"; */
                    
                       

                        /* $ejecutar2=mysqli_query($conexion,$insertar2) or die ("Error en la consulta a la base de datos x1"); */
                        
                        //if($ejecutar){
                            //echo "sdfghjkl";
                          //$actualizar2 = "UPDATE conferencias SET nombre_conferencia='$nombre_conferencia', src_conferencia ='$src_conferencia' WHERE id_universidad = $admin";
                          //$ejecutar2=mysqli_query($conexion,$actualizar2) or die ("Error en la consulta a la base de datos");
                          //if($ejecutar2){
                            //echo "<script>alert('Se han insertado los datos correctamente')</script>";
                            //echo "<script>window.open('form_ofe.php','_self')</script>";
                          //}
                          //else{
                            //echo "<script>alert('No se han insertado los datos correctamente x2')</script>";
                          //}
                        //}else{
                            //echo "<script>alert('No se han insertado los datos correctamente x1')</script>";
                        //}
                    }
                
?>