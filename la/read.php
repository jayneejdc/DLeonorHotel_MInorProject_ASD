<?php
/* User login process, checks if user exists and password is correct */
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
// Escape email to protect against SQL injections
$result = $mysqli->query("SELECT * FROM users");
$email = $mysqli->escape_string($_POST['email']);
$password = md5($_POST['password']);
$status = "0";
while ($row = mysqli_fetch_array($result)) {
	if ($row[3]==$email) {
		if ($row[4]==$password) {
			if ($row[6]==$status) {
				$avatar=$row[5];
				$firstname=$row[1];
				$lastname=$row[2];
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="la.css">
</head>
<body>
    <div class="body content">
        <div class="welcome">
            <br>
            <img style="width: 100px; height: 100px;" src="<?php echo $avatar ?>"><br />
            Welcome <span class="user"><?php echo $firstname . $lastname; ?></span>
            <?php
            $mysqli = new mysqli("localhost", "root", "", "hotel_reservation");
            //Select queries return a resultset
            $sql = "SELECT username, avatar FROM users";
            $result = $mysqli->query($sql); //$result = mysqli_result object
            //var_dump($result);
            ?>
            <br><br>
        </div>
    </div>

</body>
</html>