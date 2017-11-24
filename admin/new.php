<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM history";
$result = mysqli_query($mysqli, $query);

$temp= $_POST['picked'];
$status="1";

$sql="UPDATE history SET status = '$status' WHERE booking_id='$temp'";

if ( $mysqli->query($sql) ){
	header("location: archived.php");
}else {
	echo "hays";
}
?>