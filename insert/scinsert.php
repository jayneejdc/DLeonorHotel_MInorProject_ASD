<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM suite";
$result = mysqli_query($mysqli, $query);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];	
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$numguest = $_POST['guests'];	
$payment = "CREDIT/DEBIT CARD";
$cardnum = $_POST['cardnum'];
$valid = $_POST['valid'];
$expdate = $_POST['expdate'];
$cardname = $_POST['cardname'];
$temp="";
$status="0";
$type="Suite";
$activity="Booking";
while ($row = mysqli_fetch_array($result)) {
	if (empty($row[1])) {
		$temp=$row[0];
		$sql = "UPDATE suite SET firstname='$firstname', lastname='$lastname'  ,contact='$contact', checkin = '$checkin' , checkout = '$checkout' , numguest = '$numguest', payment = '$payment' , cardnum = '$cardnum' , valid = '$valid' , expdate = '$expdate' , cardname = '$cardname' WHERE num='$temp'";
		$sql2 = "INSERT INTO history (num, firstname, lastname, checkin, checkout, numguest, payment,  type, activity, status) VALUES ('$temp', '$firstname', '$lastname', '$checkin', '$checkout', '$numguest', '$payment', '$type','$activity', '$status' )";
		if ( $mysqli->query($sql) ){
			if ( $mysqli->query($sql2) ){
				break;
			}
		}
	}
}
if (empty($temp)) {
	header("location: ../alert.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Styles/receipt.css">
	<title>Confirmation</title>
</head>
<body>
	<div class="box" style="background-color: rgba(40,40,40,1); color: white; margin-left: 5%;">
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
	<div class="complete" style="background-color: rgba(40,40,40,1); color: white; padding: 3%; border: 2px solid rgb(218, 165,32); margin-right: 2%;">
		<h1>Booking Complete</h1>
		<hr>
		<p>Details about your booking was sent via email. The payment is recieved by our company. Thank you very much</p>
		<br>
		<label>For more information you can contact us via </label><a href="">contact form</a>
	</div>
</body>
</html>