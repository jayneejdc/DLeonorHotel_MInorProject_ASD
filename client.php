<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$name = $_POST['name'];
$contact = $_POST['contact'];	

$sql = "INSERT INTO client_info (name, contact)" . "VALUES ('$name', '$contact')";
	if ( $mysqli->query($sql) ){
		echo "GWAPO KO!";
 	}else {
		echo "Pangit KA!";; 
    }
?>