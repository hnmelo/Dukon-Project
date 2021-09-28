<?php 
	include "../../MODEL/config.php";
	?>
<!DOCTYPE html>
<html lang="ES">
	<head>
		<meta charset="utf-8">

		<title>CodePen - login/signup form animation</title>
		<link rel="stylesheet" href=<?php echo Conectar::ruta().'ASSETS/css/login.css';?>>
		
		<!-- bootstrap css -->
		<link rel="stylesheet" href="<?php echo Conectar::ruta();?>ASSETS/css/bootstrap.min.css">

		<!-- theme style css -->
		<link rel="stylesheet" href="<?php echo Conectar::ruta();?>ASSETS/css/style.css">
	</head>
	<body>
		<div class="main-container">
			<?php include "../index/header2.php";?>
			<!-- partial:index.partial.html -->
		<section class="feature-top">
			<center><div class="form-structor">
				<div class="signup">
					<h2 class="form-title" id="signup"><span>or</span>Registrarse</h2>
					<div class="form-holder">
						<form action="../../controller/auth.controller.php?signup" method="post">
						<input type="text" class="input" name="nombre" placeholder="Nombre:" />
						<input type="email" class="input" name="correo" placeholder="Correo:" />
						<input type="password" class="input" name="clave" placeholder="Contraseña" min='6' />
						<input type="password" class="input" name="confclave" min='6' placeholder="Confirmar constraseña" />
						<button class="submit-btn"> Sign up </button>
					</div>
				</form>
			</div>
			<form action="../../controller/auth.controller.php?login" method="post">
			<div class="login slide-up">
				<div class="center">
					<h2 class="form-title" id="login"><span>or</span>Ingresar</h2>
					<div class="form-holder">
						<input type="email" class="input" name="correo" placeholder="Correo:" />
						<input type="password" class="input" name="clave" placeholder="Clave" />
					</div>
					<button Type="submit" class="submit-btn">Entrar</button>
				</form>
				</div>
			</div>
		</div></center>
	</section>
	</div>
		<!-- partial -->
		<script src="../../assets/js/login.js"></script>
	</body>
</html>