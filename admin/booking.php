<?php include 'header.html';?>
<br><br>
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
    FROM standard';
    
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Del Leonor Hotel | Admin</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin_style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
      <br />
      <div align="right">
        <a href="logout.php">Logout</a>
      </div>
      <br />
     <div class="panel panel-default" style="margin-left: 19%;">
     <div class="panel-heading">BOOKING DETAILS</div>
     <div class="panel-body">
       <span id="message"></span>
       <div class="table-responsive" id="user_data">
        <table class="table table-bordered table-striped">
      <tr>
        <td>NAME</td>
        <td>CONTACT</td>
        <td>CHECK-IN</td>
        <td>CHECK-OUT</td>
        <td>NO. OF GUEST</td>
        <td>NO. OF ROOMS</td>
        <td>PAYMENT</td>
        <td>STATUS</td>
        
      </tr>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $query ) ){
            echo
            "<tr>
              <td>{$row['name']}</td>
              <td>{$row['contact']}</td>
              <td>{$row['checkin']}</td>
              <td>{$row['checkout']}</td>
              <td>{$row['numguest']}</td>
              <td>{$row['numroom']}</td>
              <td>{$row['payment']}</td>
              <td><button type='button'; class='btn btn-danger'>CHECKOUT</button></td>
            </tr>";
          }
        ?>
        </table>
     <?php mysqli_close($conn); ?>
<br/><br/>

      </tbody>

     </div>
     </div>
     </div>
  </div>
 </body>
 <?php include 'sidebar.php';?>

</html>