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
	<body class="listado">
		<?php
			include("recursos/header.php");
		?>

		<main>
			<div class="wrapper-center">
				<h2 class="page-title">Categoría:</h2>
				<div class="center">
					<div class="items">
						<div class="games">
							<a href="juego.php" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.php" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.php" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.php" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.php" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.php" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.php" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.php" class="game">
								<img src="img/juego.jpg" alt="Un Juego" />
								<div class="title">Battlefield 1</div>
							</a>
							<a href="juego.php" class="game">
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