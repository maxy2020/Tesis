<?php
	session_start();
	if($_SESSION && isset($_GET['id'])){
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
			require_once ("../php/classes/Videogame.php");
			$game = Videogame::getGame($_GET['id']);
			if($game['user_iduser'] == $_SESSION['iduser']){
		?>

		<main>
			<div class="wrapper-center">
				<h2 class="page-title">Editar Juego:</h2>
				<form class="form" action="../php/requestUser.php" method="POST">
					<input id="nombre" name="nombre" type="text" placeholder="Nombre" value="<?php echo $game['title'];?>" />
					<input id="url" name="url" type="text" placeholder="URL" value="<?php echo $game['url'];?>"/>
					<textarea id="descripcion" name="desc" rows="6" placeholder="Descripción"><?php echo $game['description'];?></textarea>
					<input id="regist" type="submit" value="Publicar" />
				</form>
				<div class="text-error">Usuario o mail no disponibles</div>
				<div class="text-success">Juego publicado correctamente!</div>
			</div>
		</main>

		<?php
			}
			else {
				header("Location: index.php");
				exit;
			}
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