<?php

session_start();

require_once "DBConnection.php";
require_once 'classes/User.php';

header('Content-Type: application/json; charset=utf-8');


if($_SERVER['REQUEST_METHOD'] == "GET") {
	if(isset($_GET["id"])){
		try {
			echo json_encode(User::getById($_GET["id"]));
		} catch (Exception $e) {
    		echo json_encode({'error'=>$e->getMessage()});
		}
	}
	elseif(isset($_GET["user"])){
		try {
			echo json_encode(User::getByUserName($_GET["user"]));
		} catch (Exception $e) {
    		echo json_encode({'error'=>$e->getMessage()});
		}
	}
	elseif(isset($_GET["logout"])){
		session_destroy();
	}
	else{
		echo json_encode(User::getAll());
	}
}
elseif($_SERVER['REQUEST_METHOD'] == "POST") {
	if($_POST['email'] && $_POST['user'] && $_POST['pass']){
		try {
			$user = new User($_POST['email'],$_POST['user'],$_POST['pass']);
			echo $user->addNew();
		} catch (Exception $e) {
    		echo json_encode({'error'=>$e->getMessage()});
		}
	}
	elseif($_POST['user'] && $_POST['pass']){
		try {
			$user = User::getByUserName($_POST['user']);
			if($user){
				if($user->getPass() == password_hash($_POST['pass'], PASSWORD_BCRYPT)){
					if($user->getLevel()==0){
						$_SESSION['login']  = 'user';
					}
					elseif($user->getLevel()==1){
						$_SESSION['login']  = 'admin';						
					}
					elseif($user->getLevel()==2){
						$_SESSION['login']  = 'superadmin';						
					}
    				echo json_encode({'Login'=>'success'});
				}
			}
			else {				
				echo json_encode({"Login"=>"error"});
			}
		} catch (Exception $e) {
    		echo json_encode({'Login'=>$e->getMessage()});
		}
	}
	else {
		echo json_encode({"error"=>"error"});
	}
}
else {	
	header('Location: /public');
	exit;
}