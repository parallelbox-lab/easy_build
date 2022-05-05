<?php
include('inc/portal.php');
// include('inc/session.php');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
//$database = new database();
//$conn = $database->getConnection();
$portal = new Portal();
//echo $user;
			$first_name = trim(mysqli_real_escape_string($conn, !empty($_POST['first_name']) ? $_POST['first_name'] : ""));
			$last_name = trim(mysqli_real_escape_string($conn, !empty($_POST['last_name']) ? $_POST['last_name'] : ""));
			$email = trim(mysqli_real_escape_string($conn, !empty($_POST['email']) ? $_POST['email'] : ""));
			$password = trim(mysqli_real_escape_string($conn, !empty($_POST['password']) ? $_POST['password'] : ""));
	
			$exist = $portal->checkExistingUser($conn, $email);
			$user = $portal->insertRecord($conn,$first_name,$last_name,$email,$password);
			// echo $user;
			if($exist == 1){
					echo 5;
				}else {
					echo $user;
				};
			// echo $portal->checkExistingUser($conn,"temi47@gmail.com");
	
		
	
?>
