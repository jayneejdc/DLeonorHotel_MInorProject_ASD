<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM standard";
$result = mysqli_query($mysqli, $query);

$num = $_POST['num'];
$none="";

$sql = "UPDATE standard SET name='$none' ,contact='$none', checkin = '$none' , checkout = '$none' , numguest = '$none', payment = '$none', cardnum = '$none' , valid = '$none' , expdate = '$none' , cardname = '$none' WHERE num='$num'";
if ( $mysqli->query($sql) ){
	echo "horray";
}
?>