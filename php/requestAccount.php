<?php

session_start();

require_once "classes/DBConnection.php";
require_once 'classes/User.php';

header('Content-Type: application/json; charset=utf-8');


if($_SERVER['REQUEST_METHOD'] == "GET") {
	if(isset($_GET["logout"])){
		session_destroy();
		echo json_encode(["Logout"=>"success"]);
	}
	else{
		echo json_encode(["Logout"=>"error"]);
	}
}
elseif($_SERVER['REQUEST_METHOD'] == "POST") {
	if(isset($_POST['user']) && isset($_POST['pass'])){
		try {
			$user = User::getByUserName($_POST['user']);
			if($user){
				if(password_verify($_POST['pass'], $user->getPass())){
					if($user->getLevel()==0){
						$_SESSION['login']  = 'user';
					}
					elseif($user->getLevel()==1){
						$_SESSION['login']  = 'admin';
					}
					elseif($user->getLevel()==2){
						$_SESSION['login']  = 'superadmin';
					}
					$_SESSION['iduser'] = $user->getId();
					$_SESSION['name'] = $user->getUser();
    				echo json_encode(['Login'=>'success']);
				}
				else {
    				echo json_encode(['pass1'=>$user->getPass(),'pass2'=>password_hash($_POST['pass'], PASSWORD_BCRYPT)]);					
				}
			}
			else {				
				echo json_encode(["Login"=>"error"]);
			}
		} catch (Exception $e) {
    		echo json_encode(['Login'=>$e->getMessage()]);
		}
	}
	else {
		echo json_encode(["error"=>"error1"]);
	}
}
else {	
	echo json_encode(["error"=>"error2"]);
}