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
				<h2 class="page-title">Juegos:</h2>
				<div class="center">
					<div class="items">
						<div class="games">
							<?php
								require_once ("../php/classes/Videogame.php");

								$games = Videogame::getGames();

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