<?php
if(isset($_POST['Iniciar'])){
include('conexion.php');
$correo_usu = $_POST['correo_usu'];
$clave_usu = $_POST['clave_usu'];
$Query= "SELECT * FROM usuarios WHERE correo_usu='".$correo_usu."' and clave_usu='".$clave_usu."'";
$resultado = mysqli_query($conexion, $Query);

$nr = mysqli_num_rows($resultado);
if($nr == 1){
    echo "bienvenido";
    //echo '<a href="universidades.html"></a>';
    
}
else if($nr == 0){
    echo "Este usuario no existe";
}
}
?>