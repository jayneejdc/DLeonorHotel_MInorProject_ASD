<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM standard";
$result = mysqli_query($mysqli, $query);

$none=NULL;
$temp=$_POST['picked'];
$status="0";

while ($row = mysqli_fetch_array($result)) {
	if ($temp===$row[0]) {
		$sql = "UPDATE standard SET firstname='$none', lastname='$none' , checkin = '$none' , checkout = '$none' , numguest = '$none', payment = '$none', cardnum = '$none' , valid = '$none' , expdate = '$none' , cardname = '$none' ,contact='$none' , status = '$status' WHERE num='$temp'";
		if ( $mysqli->query($sql) ){
			header("location: booking.php");
		}else{
			echo "pagka";
		}
	}

}
?>