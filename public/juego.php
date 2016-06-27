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
			require_once ("../php/classes/Videogame.php");
			require_once ("../php/classes/User.php");

			if(isset($_GET["id"]) && is_int(intval($_GET["id"]))){
				$game = Videogame::getGame($_GET["id"]);
				$user = User::getByIdWeb($game['user_iduser']);
			}
			else {
				header("Location: index.php");
				exit;
			}
		?>

		<main>
			<div class="wrapper-center">
				<h2 class="page-title"><?php echo $game['title']; ?>:</h2>
				<div class="center">
					<div class="game">
						<iframe src="<?php echo $game['url']; ?>" frameborder="0" id="GameFrame" style="width:900px; height:500px;" allowfullscreen="true" msallowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" sandbox="allow-same-origin allow-scripts allow-pointer-lock allow-orientation-lock allow-popups" ></iframe>
					</div>
					<div class="info">
						<div class="top">
							<div class="avatar"></div>
							<div class="name"><?php echo $user['username']; ?></div>
							<div class="date"><?php $date = new DateTime($game['date']); echo $date->format('d-m-Y H:i:s');  ?></div>
						</div>
						<div class="bottom">
							<div class="desc"><p><span>Descripción: </span><?php echo $game['description']; ?></p></div>
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