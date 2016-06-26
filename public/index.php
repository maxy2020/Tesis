<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/main.css" />
		<link rel="shortcut icon" href="img/favicon.png" />
		<script src="js/jquery-2.2.1.min.js"></script>
		<script src="js/form-coment.js"></script>
		<title>Indie Games</title>
	</head>
	<body class="home">
		<?php
			include("recursos/header.php");
		?>


		<main>
			<div class="wrapper-center">
				<div class="banner">
					<div class="banner-container">
						<img src="img/banner.jpg" alt="banner" />
					</div>
				</div>
				<div class="center">
					<div class="items new-games">
						<h2><a href="listado.html">Nuevos Juegos</a></h2>
						<div class="games">
							<a href="juego.html" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.html" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.html" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
						</div>
					</div>
					<div class="items more-played">
						<h2><a href="listado.html">Más Jugados</a></h2>
						<div class="games">
							<a href="juego.html" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.html" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.html" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
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