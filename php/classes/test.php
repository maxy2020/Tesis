<?php
	require_once("User.php");

	$user = User::getById(1);
	$user['username'] = 'testnuevo';
	$user['email'] = 'testttt@testtt.com';

	echo "<pre>";
		print_r($user->addNew());
	echo "</pre>";
?>