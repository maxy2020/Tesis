<?php
	session_start();
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
		            <tr>
		                <td>img</td>
		                <td>TitanFall</td>
		                <td><a href="" class="bttn edit"></a></td>
		                <td><a href="" class="bttn delete"></a></td>
		            </tr>
			    </table>
			</div>
		</main>

		<?php
			include("recursos/footer.php");
		?>
	</body>
</html>