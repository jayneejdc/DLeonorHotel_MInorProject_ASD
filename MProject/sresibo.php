<?php include 'html/header.html';?>
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM standard";
$options="";
$result = mysqli_query($mysqli, $query);
while ($row = mysqli_fetch_array($result)) {
	$checkin = "<option>$row[2]</option>";
	$checkout = "<option>$row[3]</option>";
	$guests = "<option>$row[4]</option>";
	$payment = "<option>$row[5]</option>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Styles/resibo.css">
	<title>Confirmation</title>
</head>
<body>
	<div class="box">
		<div id="indent">
			<h2><center>Confirmation</center></h2>
			<br><br>
			<p>Room Type: Standard </p>
			<p>Room Number: </p>
			<p>Check in: <?php echo $checkin; ?></p>
			<p>Check out: <?php echo $checkout; ?></p>
			<p>Guests: <?php echo $guests; ?></p>
			<p>Payment Method: <?php echo $payment; ?></p>
			<br><br>
		</div>
	</div>
</body>
</html>