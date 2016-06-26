<?php

session_start();

require_once "classes/DBConnection.php";
require_once 'classes/User.php';

header('Content-Type: application/json; charset=utf-8');


if($_SERVER['REQUEST_METHOD'] == "GET") {
	if(isset($_GET["id"])){
		try {
			echo json_encode(User::getById($_GET["id"]));
		} catch (Exception $e) {
    		echo json_encode(['error'=>$e->getMessage()]);
		}
	}
	elseif(isset($_GET["user"])){
		try {
			echo json_encode(User::getByUserName($_GET["user"]));
		} catch (Exception $e) {
    		echo json_encode(['error'=>$e->getMessage()]);
		}
	}
	else{
		echo json_encode(User::getAll());
	}
}
elseif($_SERVER['REQUEST_METHOD'] == "POST") {
	if(isset($_POST['email']) && isset($_POST['user']) && isset($_POST['pass'])){
		try {
			$user = new User($_POST['email'],$_POST['user'],$_POST['pass']);
			return $user->addNew();
		} catch (Exception $e) {
    		return json_encode(['error'=>$e->getMessage()]);
		}
	}
	else {
		return json_encode(["error"=>"error"]);
	}
}
else {	
	header('Location: /public');
	exit;
}