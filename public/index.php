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
	<body class="home">
		<?php
			include("recursos/header.php");
			require_once ("../php/classes/Videogame.php");
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
							<?php

								$games = Videogame::getGames(6);

								foreach ($games as $game) {
									echo '<a href="juego.php?id='.$game["idvideogame"].'" class="game">';
									echo '	<img src="'.$game["avatar"].'" alt="'.$game["title"].'" />';
									echo '	<div class="title">'.$game["title"].'</div>';
									echo '</a>';
								}
							?>
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