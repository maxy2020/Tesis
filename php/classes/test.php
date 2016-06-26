<?php
	require_once("User.php");

	$user = new User('testttttttt@testtt.com','testtttttttt','asdas123');

	echo "<pre>";
		print_r($user->addNew());
	echo "</pre>";
?>