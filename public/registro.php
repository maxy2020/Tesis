<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/main.css" />
		<link rel="shortcut icon" href="img/favicon.png" />
		<script src="js/jquery-2.2.1.min.js"></script>
		<script src="js/ajaxUser.js"></script>
		<script src="js/main.js"></script>
		<title>Indie Games</title>
	</head>
	<body class="reg">
		<?php
			include("recursos/header.php");
		?>

		<main>
			<div class="wrapper-center">
				<h2 class="page-title">Registrate:</h2>
				<form class="form" action="../php/requestUser.php" method="POST">
					<div class="avatar"></div>
					<input id="usuario" name="user" type="text" placeholder="Usuario" />
					<input id="clave" name="pass" type="password" placeholder="Contraseña" />
					<input id="clave2" name="repass" type="password" placeholder="Repetir contraseña" />
					<input id="email" name="email" type="mail" placeholder="Mail" />
					<input id="regist" type="submit" value="Crear" />
				</form>
				<div class="text-error">Usuario o mail no disponibles</div>
				<div class="text-success">Usuario creado correctamente!</div>
			</div>
		</main>

		<?php
			include("recursos/footer.php");
		?>
	</body>
</html>