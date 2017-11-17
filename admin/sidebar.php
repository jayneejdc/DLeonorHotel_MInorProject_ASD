<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'hotel_reservation'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql = 'SELECT * 
    FROM admin_info';
    
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	

</head>

<sidebar>

	<div class="w3-sidebar w3-dark-grey w3-bar-block" style="width:25%, color:black; background: fixed;">
  <img src="../Images/user.png" style="width: 50%; height: 20%; margin-left: 20%; margin-top: 30%;">
        <?php
          while( $row = mysqli_fetch_assoc( $query ) ){
            echo
            "<tr>
              <td>{$row['admin_email']}</td>
              <br>
              <td>{$row['admin_lastname']}</td>
              <br>
              <td>{$row['admin_firstname']}</td>
              
            </tr>";
          }
        ?>
     <?php mysqli_close($conn); ?>
      <a href="#">Edit Profile</a><br>
      <a href="#">Logout</a>

  <form action="upload.php" method="post"
      enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>

</div>
}
</sidebar>
</html>