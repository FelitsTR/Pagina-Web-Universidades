<?php
function fsConfigs(){
    if(isset($_POST['Iniciar'])){
    include('conexion.php');
    $correo_u = $_POST['correo_u'];
    $clave_uni = $_POST['clave_uni'];
    $ID_U= "SELECT id_usu_uni FROM usuarios_uni WHERE correo_u='".$correo_u."' and clave_uni='".$clave_uni."'";
    $id_base = $mysqli->query($ID_U);
    return $id_base;
    }
}
// function fsConfigs(){

//     $this->settings = $this->getConfigs();

// }
?>