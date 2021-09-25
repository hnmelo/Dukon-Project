<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CodePen - login/signup form animation</title>
	<link rel="stylesheet" href="../../ASSETS/css/login.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="form-structor">
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
	</div>
	<!-- partial -->
	<script src="../../assets/js/login.js"></script>

</body>

</html>