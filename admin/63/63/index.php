<?php
	session_start();
	include_once 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
			$resultImg = mysqli_query($conn, $sqlImg);
			while ($rowImg = mysqli_fetch_assoc($resultImg)) {
				echo "<div class='user-container'>";
					if ($rowImg['status'] == 0) {
						echo "<img src='uploads/profile".$id.".jpg?'".mt_rand().">";
					} else {
						echo "<img src='uploads/profiledefault.jpg'>";
					}
					echo "<p>".$row['username']."</p>";
				echo "</div>";
			}
		}
	} else {
		echo "There are no users yet!";
	}

	if (isset($_SESSION['id'])) {
		if ($_SESSION['id'] == 1) {
			echo "You are logged in as user #1";
		}
		echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
			<input type='file' name='file'>
			<button type='submit' name='submit'>UPLOAD</button>
		</form>";
	} 
?>

</body>
</html>