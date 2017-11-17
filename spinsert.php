<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM suite";
$result = mysqli_query($mysqli, $query);

$name = $_POST['guestname'];
$contact = $_POST['contact'];	
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$numguest = $_POST['guests'];	
$payment = "Pay at Hotel";
$temp="";

while ($row = mysqli_fetch_array($result)) {
	if (empty($row[1])) {
		$temp=$row[0];
		$sql = "UPDATE suite SET name='$name' ,contact='$contact', checkin = '$checkin' , checkout = '$checkout' , numguest = '$numguest', payment = '$payment' WHERE num='$temp'";
		if ( $mysqli->query($sql) ){
			break;
		}
	}
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
			<p>Room Type: suite </p>
			<p>Check in: <?php echo $checkin; ?></p>
			<p>Check out: <?php echo $checkout; ?></p>
			<p>Guests: <?php echo $numguest; ?></p>
			<p>Payment Method: <?php echo $payment; ?></p>
			<p>Name: <?php echo $name; ?></p>
			<p>Contact: <?php echo $contact; ?></p>
			<p>Room Number: <?php echo $temp; ?></p>
			<br><br>
		</div>
	</div>
</body>
</html>