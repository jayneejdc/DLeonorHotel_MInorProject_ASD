<?php
include('database.php');
if(isset($_SESSION["type"]))
{
 header("location:index.php");
}
$message = '';
if(isset($_POST["login"]))
{
 if(empty($_POST["admin_email"]) || empty($_POST["admin_password"]))
 {
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
  $query = "
  SELECT * FROM admin_info 
  WHERE admin_email = :admin_email
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    'admin_email' => $_POST["admin_email"]
   )
  );
  $count = $statement->rowCount();
  if($count > 0)
  {
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
    if($row["status"] == '1')
    {
     if(password_verify($_POST["admin_password"], $row["admin_password"]))
     {
      $_SESSION["type"] = $row["admin_type"];
      header("location: index.php");
     }
     else
     {
      $message = '<div class="alert alert-danger">Wrong Password</div>';
     }
    }
    else
    {
     $message = '<div class="alert alert-danger">Your Account has been disabled, please contact admin</div>';
    }
   }
  }
  else
  {
   $message = "<div class='alert alert-danger'>Wrong Email Address</div>";
  }
 }
}
?>

<!DOCTYPE html>
<html>
 <head>
  <title>How to Disable Enable User Login in PHP using Ajax</title>
  <script src="bootstrap/js/jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
  <script src="bootstrap/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">How to Disable Enable User Login in PHP using Ajax</h2>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
     <form method="post">
      <span class="text-danger"><?php echo $message; ?></span>
      <div class="form-group">
       <label>User Email</label>
       <input type="text" name="admin_email" id="admin_email" class="form-control" />
      </div>
      <div class="form-group">
       <label>Password</label>
       <input type="password" name="admin_password" id="admin_password" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="login" id="login" class="btn btn-info" value="Login" />
      </div>
     </form>
    </div>
   </div>
   <br/>
  </div>
 </body>
</html>
