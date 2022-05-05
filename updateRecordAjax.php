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
            $user_id = trim(mysqli_real_escape_string($conn, !empty($_POST['user_id']) ? $_POST['user_id'] : ""));
            $email = trim(mysqli_real_escape_string($conn, !empty($_POST['email']) ? $_POST['email'] : ""));
            
			// $exist = $portal->checkExistingUser($conn, $email);
			$user = $portal->updateProfile($conn,$user_id, $email);
			// echo $user;
			if ($user == 1) {
				echo 1;
			} else {
				echo 0;
			};
            //  echo $portal->checkExistingUser($conn,"temi47@gmail.com","temi47@gmail.com","temi47@gmail.com","temi47@gmail.com","temi47@gmail.com","temi47@gmail.com");
            
?>
