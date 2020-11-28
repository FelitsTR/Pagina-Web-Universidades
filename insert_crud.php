<?php 

if (isset($_POST['Guardar'])){

    //ID de Universidad

    session_start();
    $admin=$_SESSION['id_uni'];
    $id_universidad = $admin;

    // Universidad

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

    // Universidades_Imagenes
    
    $src_imagenes_uni = $_POST['src_imagenes_uni'];

    //$ubicacion +=  "<iframe src='http://maps.google.com/maps?q=".$latitud.",".$longitud."&z=15&output=embed' width='500' height='600' frameborder='0' style='border:0'></iframe>";

    // Conferencias

    $nombre_conferencia = $_POST['nombre_conferencia'];
    $src_conferencia = $_POST['src_conferencia'];

    // Carrera_imagenes

    $src_imagenes_carrera = $_POST['src_imagenes_carrera'];
    
    // Oferta educativa

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
    
    //Insercion de datos en la base de datos 
    
    include('conexiones/conexion.php');
    $stm1 = "INSERT INTO universidades (id_universidad, nombre_uni, telefono_uni, correo_uni, id_municipio, logo_uni, id_usu_uni, latitud, longitud, facebook, whatsapp, src_video) VALUES ('$id_universidad','$nombre_uni','$telefono_uni','$correo_uni','$id_municipio','$logo_uni','$admin','$latitud','$longitud','$facebook','$whatsapp','$src_video')";
    $query1=mysqli_query($conexion, $stm1);
    if($query1){
        $stm2 = "INSERT INTO conferencias (id_universidad, nombre_conferencia, src_conferencia) VALUES ('$id_universidad','$nombre_conferencia','$src_conferencia')";
        $query2 = mysqli_query($conexion, $stm2);
        if($query2){
            $stm3 = "INSERT INTO universidades_imagen (id_universidad, src_imagenes_uni) VALUES ('$id_universidad','$src_imagenes_uni')";
            $query3 = mysqli_query($conexion, $stm3);
            if($query3){
                $stm4 = "INSERT INTO oferta_educativa (id_universidad, periodo_academico, carrera, descripcion, objetivo, perfil_ingreso, perfil_egreso, plan_estudio, carrera_video, tipo_carrera, src_doc, years, meses) VALUES ('$id_universidad','$periodo_academico','$carrera','$descripcion','$objetivo','$perfil_ingreso','$perfil_egreso','$plan_estudio','$carrera_video','$tipo_carrera','$src_doc','$years','$meses')";
                $query4 = mysqli_query($conexion, $stm4);
                if($query4){
                    $stm5 = "INSERT INTO carrera_imagen (src_imagenes_carrera, id_universidad) VALUES ('$src_imagenes_carrera','$id_universidad')";
                    $query5 = mysqli_query($conexion, $stm5);
                    if($query5){
                        echo "Se han insertado correctamente los datos";
                    }else{
                        echo "No servimos para nada x5";
                    }
                }else{
                    echo "No servimos para nada x4";
                }
            }else{
                echo "No servimos para nada x3";
            }
        }else{
            echo "No servimos para nada x2";
        }
    }else{
        echo "No servimos para nada x1";
    }
    mysqli_close($conexion);
}
?>