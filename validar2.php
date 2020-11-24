<?php
if(isset($_POST['Iniciar_2'])){
	include('conexion.php');
	$correo_u = $_POST['correo_u'];
	$clave_uni = $_POST['clave_uni'];
	$Query = "SELECT * FROM usuarios_uni WHERE correo_u='".$correo_u."' and clave_uni='".$clave_uni."'";
	$resultado = mysqli_query($conexion, $Query);

	$nr = mysqli_num_rows($resultado);
	if($nr == 1){
    	echo "bienvenido universidad";
    	//echo '<a href="universidades.html"></a>';
	}
	else if($nr == 0){
    echo "Esta universidad no existe";
	}
}
?>