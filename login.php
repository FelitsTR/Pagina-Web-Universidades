<?php
if(isset($_POST['Iniciar1'])){
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

if(isset($_POST['Iniciar2'])){
	include('conexion.php');
	$correo_u = $_POST['correo_u'];
	$clave_uni = $_POST['clave_uni'];
	$Query_uni = "SELECT * FROM usuarios_uni WHERE correo_u='".$correo_u."' and clave_uni='".$clave_uni."'";
	$resultado_uni = mysqli_query($conexion, $Query_uni);

	$nr_uni = mysqli_num_rows($resultado_uni);
	if($nr_uni == 1){
    	echo "bienvenido universidad";
    	//echo '<a href="universidades.html"></a>';
    
	}
	else if($nr_uni == 0){
    echo "Esta universidad no existe";
	}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio de sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-59 text-center">
						Iniciar sesión
					</span>

					<div class="row w-100 justify-content-center pb-3 col-sm justify-content-center">
						<div class="row ">
							<div class="pr-2">
								<input id="opc1" name="Opciones" type="radio" value="Opciones" onchange="funcion()" checked>
								Estudiantes
							</div>
							<div>
								<input id="opc2" name="Opciones" type="radio" value="Opciones" onchange="funcion()">
								Universidades
							</div>

						</div>

						<div id="changeForm"></div>
						<script>
							function funcion(){
								document.getElementById("Ocultar1").style.display = "none";
								document.getElementById("Ocultar2").style.display = "none";
								var opc1 = document.getElementById("opc1");
								var opc2 = document.getElementById("opc2");
								if(opc1.checked){
									
									document.getElementById("Ocultar1").style.display = "block";
								}
								if(opc2.checked){
									document.getElementById("Ocultar2").style.display = "block";
								}
								
							}
						</script>
					</div>


					<div id="Ocultar1" class="w-100">
						<form method="POST">
							<div class="w-100 font-weight-bold text-center">
								<p class="h3">Estudiantes</p>
							</div>
						<!-- Email del estudiante -->
							<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
								<span class="label-input100">Email</span>
								<input class="input100" type="text" name="correo_usu" placeholder="Correo electronico...">
								<span class="focus-input100"></span>
							</div>

						<!-- Contraseña del estudiante -->
							<div class="wrap-input100 validate-input" data-validate = "Password is required">
								<span class="label-input100">Contraseña</span>
								<input class="input100" type="password" name="clave_usu" placeholder="*************">
								<span class="focus-input100"></span>
							</div>

							<div class="container-login100-form-btn justify-content-center pb-4">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn" type="submit" value="Enviar" name="Iniciar1" id="Iniciar1">
										Iniciar sesion1
									</button>
								</div>
							</div>
						</form>
					</div>

				<div id="Ocultar2" class="w-100">
					<form method="POST">
						<div class="w-100 font-weight-bold text-center">
								<p class="h3">Universidades</p>
							</div>
							
							<!-- Email de la universidad -->
							<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
								<span class="label-input100">Email</span>
								<input class="input100" type="text" name="correo_u" placeholder="Correo electronico...">
								<span class="focus-input100"></span>
							</div>

							<!-- Contraseña de la universidad -->
							<div class="wrap-input100 validate-input" data-validate = "Password is required">
								<span class="label-input100">Contraseña</span>
								<input class="input100" type="password" name="clave_uni" placeholder="*************">
								<span class="focus-input100"></span>
							</div>
							<div class="container-login100-form-btn justify-content-center pb-4">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn" type="submit" value="Enviar" name="Iniciar2" id="Iniciar2">
										Iniciar sesion2
									</button>
								</div>
							</div>
					</form>
				</div>


					<div class="container-login100-form-btn justify-content-center w-100">
						<a href="register.php" class="">
							Registrarse
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
				<script>
						document.getElementById("Ocultar1").style.display = "block";
						document.getElementById("Ocultar2").style.display = "none";
				 	</script>
			</div>

			<div class="login100-more" style="background-image: url('images/bg-02.png');"></div>

		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>