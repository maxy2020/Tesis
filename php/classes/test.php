<script src="../../public/js/jquery-2.2.1.min.js"></script>

<script>

</script>

<?php
	require_once("Videogame.php");

	$game = new Videogame('El rompedor','http://play.avix.tv/pinchar/',3);
	$game->addNew();
?>