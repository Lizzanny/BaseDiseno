<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="ISC Lizeth Viviana Martínez Gómez">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Log In</title>
	<link rel="stylesheet" href="../Libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Libs/fontAwesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="../Libs/alertifyjs/css/alertify.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.9.3/hamburgers.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css">
	<link rel="stylesheet" href="../Libs/css/loginstyle1.css">
</head>

<body>
		<div class="container-fluid" id='contenedor'>
			<img src="../Libs/image/logotipo.png" alt="" class="login100-form-image" style="width: 40%">
			<h1 class="login100-form-title" style="color: #4E232E; ">
					NOMBRE DEL SISTEMA
			</h1>
			
			<div class="caja">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../Libs/image/usuario.png" class="rounded-circle" alt="IMG" width="70%">
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-campos ">
						<input class="campos" type="text" name="email" placeholder="Usuario">
						<span class="focus-campos"></span>
						<span class="symbol-campos">
							<i class="far fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-campos">
						<input class="campos" type="password" name="pass" placeholder="Contraseña">
						<span class="focus-campos"></span>
						<span class="symbol-campos">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="contenedor-form-btn">
						<a class="boton" href="../Main/common.php">
							<i class="fas fa-sign-in-alt"></i> &nbsp;
							Iniciar Sesión
						</a>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							<i class="far fa-question-circle"></i>
						</span>
						<a class="txt2" href="#">
							Olvide mi contraseña
						</a>
					</div>

				</form>
			</div>
		</div>


</body>
<script src="../Libs/js/jquery-3.3.1.js"></script>

</html>