<?php
/* Password reset process, updates database with new user password */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'POS';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
session_start();

// Make sure the form is being submitted with method="post"
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    // Make sure the two passwords match
    if ( $_POST['email'] == $_POST['email2'] ) {
    	$email = $mysqli->escape_string($_POST['email']);
        $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
        $hash = $mysqli->escape_string( md5( rand(0,1000) ) );


        $sql = "UPDATE users SET password = '$password', hash = '$hash' WHERE email='$email'";
        

        if ( $mysqli->query($sql) ) {
        $_SESSION['message'] = "Your password has been reset successfully!";
        header("location: user.php");    
        }
    }
    else {
        $_SESSION['message'] = "Two passwords you entered don't match, try again!";
        header("location: error.php");    
    }

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="indent">
			<form action="forgot.php" method="POST">
				<br><br>
				<label>email: <input type="text" name="email" required></label>
				<br><br>
				<label>re type email: <input type="text" name="email2" required></label>
				<br><br>
				<label>New password: <input type="password" name="password" required></label>
                <br><br>
				<a href="rides.php"><input type="submit" name="Reserve" value="Reserve"></a>
			</form>
		</div>
</body>
</html>