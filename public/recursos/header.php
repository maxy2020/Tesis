<header>
	<div class="center">
		<h1><a href="index.php">Indie Games</a></h1>
		<div class="menu">
			<div class="bttn"><a href="listado.php">Juegos</a></div>
		</div>
		<div class="right">
			<div class="search"><input type="search" /><button>BUSCAR</button></div>
			<?php 
				if($_SESSION){
					echo '<div class="user-container"><a href="mis-juegos.php" class="user-name">'.$_SESSION['name'].'</a>';
					echo '<div class="bttn logout">Salir</div>';
					echo '<a href="nuevo-juego.php" class="bttn add-game">Subir Juego!</a></div>';
				}else{
					echo '<div class="login">';
					echo '	<form class="form">';
					echo '		<input id="user" type="text" placeholder="Usuario"/>';
					echo '		<input id="pass" type="password" placeholder="Contraseña"/>';
					echo '		<input id="enter" type="submit" value="Entrar" />';
					echo '	</form>';
					echo '	<div class="extras">';
					echo '		<a href="registro.php">Registrarme</a>';
					echo '		<a href="#">Olvide mi Pass</a>';
					echo '	</div>';
					echo '</div>';
				}
			?>
			
		</div>
	</div>
</header>