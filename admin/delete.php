<?php  
 $con = mysqli_connect("localhost", "root", "", "hotel_reservation");  

$user_ID=$_GET['user_ID'];
$query=mysql_query("SELECT * FROM history WHERE history_archive='1'");
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//Call the function to archive the table
//Function definition is given below
//Once you archive, delete the record from original table
$sql = "Delete from <history> where id=".$user_ID;
mysql_query($sql);
function archive_record($history_archive,$row)
{
	CALL move_to_history_archive(2);
}
?>