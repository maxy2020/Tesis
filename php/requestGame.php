<?php

session_start();

require_once "classes/DBConnection.php";
require_once 'classes/Videogame.php';

header('Content-Type: application/json; charset=utf-8');


if($_SERVER['REQUEST_METHOD'] == "GET") {
	if(isset($_GET['id']) && is_int(intval($_GET['id']))){
		try {
			echo json_encode(Videogame::removeById($_GET['id']));
		} catch (Exception $e) {
    		echo json_encode(['error'=>$e->getMessage()]);
		}
	}
	else {
		echo json_encode(["error"=>"error"]);		
	}
}
elseif($_SERVER['REQUEST_METHOD'] == "POST") {
	if(isset($_POST['id']) && is_int(intval($_POST['id']))){
		if( isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['url']) && isset($_POST['avatar']) ){
			try{
				$game = Videogame::getGameObject($_POST['id']);
				$game->setTitle($_POST['title']);
				$game->setDescrip($_POST['desc']);
				$game->setAvatar($_POST['avatar']);
				$game->setLink($_POST['url']);
				echo json_encode($game->editGame());
			} catch (Exception $e) {
    			echo json_encode(['error'=>$e->getMessage()]);
			}
		}
		else {
			echo json_encode(["error"=>"error"]);
		}
	}
	elseif ( isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['url']) && isset($_SESSION['iduser']) ) {
		$game = new Videogame($_POST['title'], $_POST['url'], $_SESSION['iduser'], $_POST['desc']);
		echo json_encode($game->addNew());
	}
	else {
		echo json_encode(["error"=>"error"]);
	}
}
else {	
	echo json_encode(["error"=>"error"]);
}