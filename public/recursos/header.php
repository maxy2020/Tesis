<header>
	<div class="center">
		<h1><a href="index.php">Indie Games</a></h1>
		<div class="menu">
			<div class="btn"><a href="listado.php">Juegos</a></div>
		</div>
		<div class="right">
			<div class="search"><input type="search" /><button>BUSCAR</button></div>
			<?php 
				if($_SESSION){
					echo '<div class="user-container"><div class="user-name">'.$_SESSION['name'].'</div>';
					echo '<div class="btn logout">Salir</div>';
					echo '<div class="btn add-game">Subir Juego!</div></div>';
				}else{
					echo '<div class="login">';
					echo '	<form class="form">';
					echo '		<input id="user" type="text" />';
					echo '		<input id="pass" type="password" />';
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