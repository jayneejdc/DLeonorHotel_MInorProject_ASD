<?php include 'header.html';?>
<br><br>
<?php
//index.php
include("database.php");
if(!isset($_SESSION["type"]))
{
 header("location:login.php");
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
    <link rel="stylesheet" href="button.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 </head>
 <body>
  <br />
  <div class="container" style="position: fixed;">
   <br />
   <div align="right">
    <a href="logout.php">Logout</a>
   </div>
   <br />
   <?php
   if($_SESSION["type"] == "user")
   {
    echo '<div align="center"><h2>Hi... Welcome User</h2></div>';
   }
   else
   {
   ?>

   <div class="panel panel-default" style="margin-left:24%;">
    <div class="panel-heading">User Status Details</div>
    <div class="panel-body">
     <span id="message"></span>
     <div class="table-responsive" id="user_data">
     </div>
    <?php
     $output = '';
        $query = "SELECT * FROM user_info WHERE user_type = 'user' ORDER BY user_lastname ASC";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $output .= '
      <table class="table table-bordered table-striped">
      <tr>
        <td>LASTNAME</td>
        <td>FIRSTNAME</td>
        <td>Email</td>
        <td>STATUS</td>
        <td>ACTION</td>
      </tr>
    ';
    foreach($result as $row)
    {
      $status = '';
      if($row["status"] == '1')
      {
        $user_status = '<span class = "label label-success">
            Active</span>';
      }
      else
      {
        $status = '<span class="label label-danger">
            Deactivate</span>';
      }
      $output .= '
      <form action="action.php" method="POST">
      <tr>
        <td>'.$row["user_lastname"].'</td>
        <td>'.$row["user_firstname"].'</td>
        <td>'.$row["user_email"].'</td>
        <td>'.$status.'</td>
        <td><a href="action.php"><input type="submit" name="action" value="Action"></a>
      </tr>
      </form>
      ';
    }
    $output .= '</table>';
    echo $output;
?>
    </div>
   </div>
   <?php
   }
   ?>
  </div>

 </body>
 <?php include 'sidebar.php';?>

 </html>
 
