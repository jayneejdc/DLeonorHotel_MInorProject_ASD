<?php

if(isset($_POST["action"]))
{

	$connect = new PDO('mysql:host=localhost;dbname=hotel_reservation', 'root', '');
	session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$user_status='Active';
		
			if($_POST['user_status'] == $user_status){
				$sql= "UPDATE user_info SET user_status = 'Deactivate' WHERE user_email='$user_email'";
				echo "pangit ka";
			}else{
				echo "gwapo ko";
			}


	} else{
		echo "pangit siya";
		echo 'user_lastname';
	}
}
else{
	echo "pangit si gelica";
}

?>