<?php
include('db_connect.php');
 session_start();
$database = new database();
$conn = $database->getConnection();

class Portal{
	//create password
	// public function createPassword()
	// 	{
	// 		$pwd = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyx",4)),0,4);
	// 		return $pwd;
	// 	}
	
		//create user_id
	
		public function getUserId()
			{
				$user_id = substr(str_shuffle(str_repeat("123456789abcdefghijklmnopqrstuvwxyx",3)),3,6);
				return $user_id;
			}
		//insertrecord

	public function insertRecord($conn, $first_name, $last_name, $email, $password)
	{
		// $status = 0;

		$user_id = $this->getUserId($conn);
		// $password = $this->createPassword();
		
		
		$sql = "INSERT INTO `users`(`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES ('".$user_id."','".$first_name."','".$last_name."','".$email."','".$password."')";
		
		if(mysqli_query($conn, $sql)){
			echo 1;
		}else{
			echo 0;
		};
		// return $status;
	}
	
	//login user

	public function fetchUser($conn, $email, $password)
	{
		//$num = "";
		$query = "SELECT email, password from users where email = '".$email."' and password = '".$password."'";
		$result = mysqli_query($conn, $query);
		$r =  mysqli_fetch_array($result);  
			if ($r > 0){
				$_SESSION['login_user'] = $email;
				$json[] = $r;
		} else {
			$json[] = 0;
		}

		return json_encode($json);
	}

	
	//check existing email or password
	public function checkExistingUser($conn,$email)
	{
		$num = 0;
		$query = "SELECT * FROM users where email = '" . $email . "' ";
		$result = mysqli_query($conn, $query);
		if ($row = mysqli_num_rows($result)  >= 1) {
			$num = 1;
		} else {
			$num = 0;
		}

		return $num;
	}

	//update profile

	public function updateUserRecord($conn, $user_id, $email)
	{
		// $status = 0;

		$user_id = $this->getUserId($conn);
		// $password = $this->createPassword();
		
		
		$sql = "SELECT * FROM `users`( `user_id`, `email`) VALUES ('".$user_id."','".$email."')";
		
		if(mysqli_query($conn, $sql)){
			echo 1;
		}else{
			echo 0;
		};
		// return $status;
	}

	
	
}
$portal = new Portal();
// echo $portal->insertRecord($conn,"test", "test", "test", "test", "test");
//  echo $portal->createPassword();
// echo $portal->getUserId();
// echo $portal->fetchUser($conn,"akintola41@gmail.com", "12345");
// echo $portal->checkExistingUser($conn,"akintola41@gmail.com");
echo $portal->updateUserRecord($conn, "xjcmd6", "temi47@gmail.com");
?>