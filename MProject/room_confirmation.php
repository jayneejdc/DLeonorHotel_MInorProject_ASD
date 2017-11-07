<?php include 'header.html';?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Confirmation Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Styles/room-confirmation.css">
</head>
<body>
	<div class="box">
		<img src="Images/">
		<br>
		<h2>
			php code to get which room is picked
		</h2>
		<h3>
			price(still php code)
		</h3>
		<h4>
			inclusions
		</h4>
	</div>

	<div class="sideform">
		<div class="indent">
			<br><br>
			<label>Arrival: <input type="date" name="Arrival" required></label>
			<br><br>
			<label>Departure: <input type="date" name="Departure" required></label>
			<br><br>
			<label>Rooms: <input type="number" name="quantity" required></label>
			<br><br>
			<label>Guests: <input type="number" name="quantity" required></label>
			<div class="end">
				<br><br>
				<label>Total Php to get the total amount of everything</label>
			</div>
		</div>
		<div class="btn">
			<input type="submit" name="Reserve" value="Reserve">
		</div>
	</div>
</body>
</html>
<?php include 'footer.html';?>