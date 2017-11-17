<?php $db= new mysqli('localhost','root','','hotel_reservation'); 
extract($_POST);
$id=$db->real_escape_string($id);
$user=$db->real_escape_string($status);
$sql=$db->query("UPDATE history SET status='$status' WHERE id='$id'");
echo $sql;
//echo 1;
?>
