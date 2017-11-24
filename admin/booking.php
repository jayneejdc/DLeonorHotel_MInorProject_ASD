<?php $db= new mysqli('localhost','root','','hotel_reservation'); ?>
<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM standard";
$result = mysqli_query($mysqli, $query);
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
    <script src="bootstrap/js/jquery-ui.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
      <br />
      <div align="right">
        <a href="logout.php">Logout</a>
</div>
<ul class="nav nav-pills" role="tablist">
  <li role="presentation"><a href="booking.php" style="margin-left:170px;">STANDARD |</a></li>
  <li role="presentation"><a href="DELUXE.php">DE LUXE |</a></li>
  <li role="presentation"><a href="junior.php">JUNIOR SUITE |</a></li>
  <li role="presentation"><a href="suite.php">SUITE |</a></li>
</ul>
     <?php include 'modal.php';?>
      <br />
     <div class="panel panel-default" style="margin-left: 19%;">
     <div class="panel-heading">STANDARD DETAILS</div>
     <div class="panel-body">
       <span id="message"></span>
       <div class="table-responsive" id="user_data">
        <table class="table table-bordered table-striped">
           <tr>
                <td>ROOM NUMBER</td>
                <td>LASTNAME</td>
                <td>FIRSTNAME</td>
                <td>CONTACT</td>
                <td>CHECK-IN</td>
                <td>CHECK-OUT</td>
                <td>NO. OF GUEST</td>
                <td>PAYMENT</td>
                <td>STATUS</td>
     
            </tr>
            <?php 
              $query = "SELECT * FROM standard";
              $result = mysqli_query($mysqli, $query);
              while ($row = mysqli_fetch_array($result)) : ?>
                <tr>
                  <td>
                    <form method="post" action="samok.php">
                      <?php if (!empty($row[1])) : ?>
                      <?php echo $row[1].$row[2].$row[3].$row[4].$row[5].$row[6]; ?>
                      <input type="submit" name="action" value="Checkout"/>
                      <input type="hidden" name="picked" value="<?php echo $row['num']; ?>"/>
                      <br>
                    </form>
                  </td>
                </tr>
              <?php endif; ?>
              <?php endwhile; ?>
        </table>
     <?php mysqli_close($conn); ?>
<br/><br/>

      </tbody>

     </div>
     </div>
     </div>
  </div>
 </body>
 <script type="text/javascript">
      $(document).on('click','.status_checks',function(){
      var num = ($(this).hasClass("btn-success")) ? '0' : '1';
      var msg = (num=='0')? 'checkout' : 'checkout';
      if(confirm("Are you sure to "+ msg)){
        var current_element = $(this);
        url = "ajax_checkout.php";
        $.ajax_check({
        type:"POST",
        url: url,
        data: {num:$(current_element).attr('data'),num:num},
        success: function(data)
          {   
            location.reload();
          }
        });
        }      
});

</script>
  <script>
  function OpenAlert(){
        alert("Are you sure to CHECK-OUT? ");
        document.getElementById("getMessage").style.visibility="hidden";
         
    }
 </script>

</html>