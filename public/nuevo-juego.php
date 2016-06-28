<?php
	session_start();
	if($_SESSION){
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/main.css" />
		<link rel="shortcut icon" href="img/favicon.png" />
		<script src="js/jquery-2.2.1.min.js"></script>
		<!--script src="js/form-register.js"></script-->
		<script src="js/ajaxUser.js"></script>
		<script src="js/main.js"></script>
		<title>Indie Games</title>
	</head>
	<body class="reg alta-juego">
		<?php
			include("recursos/header.php");
		?>

		<main>
			<div class="wrapper-center">
				<h2 class="page-title">Subir Juego:</h2>
				<form class="form" action="../php/requestUser.php" method="POST">
					<input id="nombre" name="nombre" type="text" placeholder="Nombre" />
					<input id="url" name="url" type="text" placeholder="URL" />
					<textarea id="descripcion" name="desc" rows="6" placeholder="Descripción"></textarea>
					<input id="regist" type="submit" value="Publicar" />
				</form>
				<div class="text-error">Usuario o mail no disponibles</div>
				<div class="text-success">Juego publicado correctamente!</div>
			</div>
		</main>

		<?php
			include("recursos/footer.php");
		?>
	</body>
</html>
<?php
	}else{
		header("Location: index.php");
		exit;
	}
?>