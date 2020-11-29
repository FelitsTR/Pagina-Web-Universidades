<?php 

if (isset($_POST['Guardar'])){


    //ID de Universidad

    session_start();
    $admin=$_SESSION['id_uni'];

    // Universidad

    $nombre_uni = $_POST['nombre_uni'];
    $telefono_uni = $_POST['telefono_uni'];
    $correo_uni = $_POST['correo_uni'];
    $id_municipio = $_POST['id_municipio'];
    $logo_uni = $_POST['logo_uni'];
    
    
    // Duracion

    $years = $_POST['years'];
    $meses = $_POST['meses'];

    // Documentos_Extras

    $src_documento = $_POST['src_documento'];
    $nombre_documento = $_POST['nombre_documento'];

    // Universidades_Imagenes
    
    $src_imagenes_uni = $_POST['src_imagenes_uni'];

    // Universidades_Videos

    $src_videos_uni = $_POST['src_videos_uni'];

    // Universidades_Detalles

    $latitud = $_POST['latitud'];
    $longitud = $_POST['longitud'];
    $ubicacion = "<iframe src='http://maps.google.com/maps?q=".$latitud.",".$longitud."&z=15&output=embed' width='500' height='600' frameborder='0' style='border:0'></iframe>";
    $facebook = $_POST['facebook'];
    $whatsapp = $_POST['whatsapp'];

    // Conferencias

    $nombre_conferencia = $_POST['nombre_conferencia'];
    $src_conferencia = $_POST['src_conferencia'];

    // Carrera_video

    $src_video_carrera = $_POST['src_video_carrera'];

    // Carrera_imagenes

    $src_imagenes_carrera = $_POST['src_imagenes_carrera'];
    
    // Oferta educativa

    $tipo = $_POST['tipo'];
    $carrera = $_POST['carrera'];
    $descripcion = $_POST['descripcion'];
    $objetivo = $_POST['objetivo'];
    $perfil_ingreso = $_POST['perfil_ingreso'];
    $perfil_egreso = $_POST['perfil_egreso'];
    $plan_estudio = $_POST['plan_estudio'];
    $modalidad = $_POST['modalidad'];
    
    //Insercion de datos en la base de datos 
    
        include('conexiones/conexion.php');
        $stm1 = "INSERT INTO universidades (id_universidad, nombre_uni, telefono_uni, correo_uni, id_municipio, logo_uni, id_usu_uni) VALUE ('$admin', '$nombre_uni', '$telefono_uni', '$correo_uni', '$id_municipio', '$logo_uni', '$admin')";
        $Result1 = mysqli_query($conexion, $stm1);
        if(!$Result1){
        echo $Result1
        }
        $stm4 = "INSERT INTO universidades_detalles (id_universidad, ubicacion, facebook, whatsapp) VALUE ('$admin', '$ubicacion','$facebook', '$whatsapp')";
        $Result4 = mysqli_query($conexion, $stm4);
        echo "<h3 class=\"ok\">Se ha creado su cuenta</h3>";
        mysqli_close($conexion);
        // include('conexion.php');
        // $stm3 = "INSERT INTO universidades_video (src_videos_uni, id_universidad) SELECT '$src_videos_uni',MAX(id_universidad) FROM universidades";
        // $Result3 = mysqli_query($Connection, $stm3);
        // mysqli_close($Connection);
        // include('conexion.php');
        // $stm2 = "INSERT INTO universidades_imagen (src_imagenes_uni)SELECT '$src_imageness_uni',MAX(id_universidad) FROM universidades";
        // $Result2 = mysqli_query($Connection, $stm2);
        // mysqli_close($Connection);
        
        // include('conexion.php');
        // $stm6 = "INSERT INTO conferencias (nombre_conferencia, src_conferencia) SELECT '$nombre_conferencia','$src_conferencia', MAX(id_universidad) FROM universidades";
        // $Result6 = mysqli_query($Connection, $stm6);
        // mysqli_close($Connection);
        // include('conexion.php');
        // $stm0 = "INSERT INTO oferta_educativa (tipo, carrera, descripcion, objetivo, perfil_ingreso, perfil_egreso, plan_estudio, modalidad) SELECT '$tipo', '$carrera', '$descripcion', '$objetivo', '$perfil_ingreso', '$perfil_egreso', '$plan_estudio', '$modalidad', MAX(id_universidad) FROM universidades";
        // $Result0 = mysqli_query($Connection, $stm0);
        // mysqli_close($Connection);
        // include('conexion.php');
        // $stm5 = "INSERT INTO duracion (years, meses) SELECT '$years','$meses',MAX(id_oferta) FROM oferta_educativa";
        // $Result5 = mysqli_query($Connection, $stm5);
        // mysqli_close($Connection);
        
        // include('conexion.php');
        // $stm7 = "INSERT INTO documentos_extras (nombre_documento, src_documento) SELECT '$nombre_documento', '$src_documento',MAX(id_oferta) FROM oferta_educativa";
        // $Result7 = mysqli_query($Connection, $stm7);
        // mysqli_close($Connection);
        // include('conexion.php');
        // $stm8 = "INSERT INTO carrera_imagen (src_imagenes_carrera) SELECT '$src_imagenes_carrera',MAX(id_oferta) FROM oferta_educativa";
        // $Result8 = mysqli_query($Connection, $stm8);
        // mysqli_close($Connection);
        // include('conexion.php');
        // $stm9 = "INSERT INTO carrera_video (src_video_carrera) SELECT '$src_video_carrera',MAX(id_oferta) FROM oferta_educativa";
        // $Result9 = mysqli_query($Connection, $stm9);
        // echo "<h3 class=\"ok\">The information has been saved</h3>";
        // mysqli_close($Connection);
        
}
?>