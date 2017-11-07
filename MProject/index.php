<?php include 'header.html';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Date Picker</title>
	<link href="Styles/styles.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="bg">
		<br><br><br>
		<div class="box">
			<br>
			<img src="Images/user.png">
			<form>
				<br><br>
				<label>Check In:</label>
				<input type="date" required><br><br>
				<label>Check Out:</label>
				<input type="date" required /><br><br><br>
				<a href="room.php ?>"><input type="submit" name="submit" value="Check Availabilty"></a>
				<br><br><br>
			</form>
		</div>
		<br><br><br>
	</div>
	<div id="about" class="fluid-container col-lg-12">
		<center>
			<h1>
				About Us
			</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
			</p>
		</center>
	</div>
	<br>
</body>
</html>
<?php include 'footer.html';?>