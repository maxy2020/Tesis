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
	<body class="juego">
		<?php
			include("recursos/header.php");
		?>

		<main>
			<div class="wrapper-center">
				<h2 class="page-title">Battlefield 1:</h2>
				<div class="center">
					<div class="game">
						<iframe src="http://play.avix.tv/turnright/" frameborder="0" id="GameFrame" style="width:900px; height:500px;" allowfullscreen="true" msallowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" sandbox="allow-same-origin allow-scripts allow-pointer-lock allow-orientation-lock allow-popups" ></iframe>
					</div>
					<div class="info">
						<div class="top">
							<div class="avatar"></div>
							<div class="name">Usuario</div>
							<div class="date">07/03/2016</div>
						</div>
						<div class="bottom">
							<div class="desc"><p><span>Descripción: </span>Reconstruye las batallas más importantes de la Segunda Guerra Mundial en una recreación virtual tridimensional en la que el jugador puede sumergirse como soldado a pie o en vehículo en alguno de los dos bandos.</p>
							<p>Entre las novedades que aportó en su época caben destacar la posibilidad de manejar diversos tipos de vehículos y sus mapas basados en orografía real con capacidad para varias decenas de jugadores simultáneos.</p></div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<?php
			include("recursos/footer.php");
		?>
	</body>
</html>