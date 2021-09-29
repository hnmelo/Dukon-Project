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
						<form action="<?php echo Conectar::ruta();?>c-signup/" method="post">
						<input type="text" class="input" name="nombre" placeholder="Nombre:" />
						<input type="email" class="input" name="email" placeholder="Correo:" />
						<input type="password" class="input" name="password" placeholder="Contraseña" min='6' />
						<input type="password" class="input" name="confclave" min='6' placeholder="Confirmar constraseña" />
						<input type='hidden' name='signup'>
						<input type='submit' class="submit-btn" value='Ingresar'>
						<!-- <button class="submit-btn"> Sign up </button> -->
					</div>
				</form>
			</div>
			<form action="<?php echo Conectar::ruta();?>c-login/" method="POST">
			<div class="login slide-up">
				<div class="center">
					<h2 class="form-title" id="login"><span>or</span>Ingresar</h2>
					<div class="form-holder">
						<input type="email" class="input" id="email" name="email" placeholder="Correo:" />
						<input type="password" class="input" id="password" name="password" placeholder="Clave" />
					</div>
					<input type='hidden' name='login'>
					<input type='submit' class="submit-btn" value='Ingresar'>
					<!-- <button Type="submit" class="submit-btn">Entrar</button> -->
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