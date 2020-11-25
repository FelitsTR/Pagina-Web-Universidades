<?php
    
    if(isset($_POST['Iniciar_2'])){
    include('conexion_id.php');
    $correo_u = $_POST['correo_u'];
    $clave_uni = $_POST['clave_uni'];
    $ID_U= "SELECT id_usu_uni FROM usuarios_uni WHERE correo_u='".$correo_u."' and clave_uni='".$clave_uni."'";
    $resultado_uni = $mysqli->query($ID_U);
    }
    
// function fsConfigs(){

//     $this->settings = $this->getConfigs();

// }
?>