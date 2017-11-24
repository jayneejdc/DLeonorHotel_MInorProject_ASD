<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM deluxe";
$result = mysqli_query($mysqli, $query);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];	
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$numguest = $_POST['guests'];	
$payment = "Pay at Hotel";
$temp="";
$none=NULL;
$status="0";
$activity="Reserve";
$type="Deluxe";

while ($row = mysqli_fetch_array($result)) {
	if (empty($row[1])) {
		$temp=$row[0];
		$sql = "UPDATE deluxe SET firstname='$firstname' , lastname='$lastname' , checkin = '$checkin' , checkout = '$checkout' , numguest = '$numguest', payment = '$payment', cardnum = '$none' , valid = '$none' , expdate = '$none' , cardname = '$none', contact='$contact', status='$status' WHERE num='$temp'";
		$sql2 = "INSERT INTO history (num, firstname, lastname, checkin, checkout, numguest, payment,  type, activity, status) VALUES ('$temp', '$firstname', '$lastname', '$checkin', '$checkout', '$numguest', '$payment', '$type','$activity', '$status' )";
		if ( $mysqli->query($sql) ){
			if ( $mysqli->query($sql2) ){
			}
		}
	}
}
if (empty($temp)) {
	header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Styles/resibo.css">
	<title>Confirmation</title>
</head>
<body>
	<div class="box">
		<div id="indent">
			<h2><center>Confirmation</center></h2>
			<br><br>
			<p>Room Type: deluxe </p>
			<p>Check in: <?php echo $checkin; ?></p>
			<p>Check out: <?php echo $checkout; ?></p>
			<p>Guests: <?php echo $numguest; ?></p>
			<p>Payment Method: <?php echo $payment; ?></p>
			<p>Name: <?php echo $firstname." ".$lastname; ?></p>
			<p>Contact: <?php echo $contact; ?></p>
			<p>Room Number: <?php echo $temp; ?></p>
			<p>Price: Php2,400.00</p>
			<br><br>
		</div>
	</div>
</body>
</html>