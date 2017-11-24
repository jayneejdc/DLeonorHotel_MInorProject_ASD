<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM suite";
$result = mysqli_query($mysqli, $query);

$num = $_POST['roomnum'];

$sql = "UPDATE suite SET name='$none' ,contact='$none', checkin = '$none' , checkout = '$none' , numguest = '$none', payment = '$none', cardnum = '$none' , valid = '$none' , expdate = '$none' , cardname = '$none' WHERE num='$num'";
if ( $mysqli->query($sql) ){
	break;
}
?>