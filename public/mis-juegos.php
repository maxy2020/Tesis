<?php
	session_start();
	if($_SESSION){
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="shortcut icon" href="img/favicon.png" />
		<script src="js/jquery-2.2.1.min.js"></script>
		<!--script src="js/form-register.js"></script-->
		<script src="js/ajaxUser.js"></script>
		<script src="js/main.js"></script>
		<title>Indie Games</title>
	</head>
	<body class="mis-juego">
		<?php
			include("recursos/header.php");
			require_once ("../php/classes/Videogame.php");
			$games = Videogame::getGamesUser($_SESSION['iduser']);
		?>

		<main>
			<div class="wrapper-center">
				<h2 class="page-title">Mis juegos:</h2>
				<table class="table table-bordered table-striped">
			        <tr>
			            <th>Imagen</th>
			            <th>Nombre</th>
			            <th class="actions">Editar</th>
			            <th class="actions">Borrar</th>
			        </tr>
			        <?php
			        	foreach ($games as $game) {
				            echo '<tr>';
				            echo '    <td><img src="'.$game['avatar'].'" alt="'.$game['title'].'"></td>';
				            echo '    <td>'.$game['title'].'</td>';
				            echo '    <td><a href="editar-juego.php?id='.$game['idvideogame'].'" class="bttn edit">EDITAR</a></td>';
				            echo '    <td><a href="javascript:void(0)" class="bttn delete" data-id="'.$game['idvideogame'].'" >BORRAR</a></td>';
				            echo '</tr>';
				        }
			        ?>
			    </table>
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