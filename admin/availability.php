<?php include 'header.html';?>
<br><br>
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'hotel_reservation'; // Database Name

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$connect) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$query = "SELECT * 
    FROM room_type ORDER BY room_ID asc";
    
$result = mysqli_query($connect, $query);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($connect));
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Del Leonor Hotel | Admin</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
          
 </head>
 <body>
  <br />
  <div class="container">
      <br />
      <div align="right">
        <a href="logout.php">Logout</a>
      </div>
      <br />
      <?php include 'modal.php';?>
      <div class="container" style="width:900px;">    
    
    <div id="live_data"></div> 
     <div class="panel panel-default" style="margin-left:20%; margin-top: 5%; ">
     <div class="panel-heading">ROOM AVAILABILITY</div>
     <div class="panel-body">
       <span id="message"></span>
      <div class="table-responsive">
      <table class="table table-bordered table-striped">
      <tr>
        <td>ROOM TYPE</td>
        <td>ROOM PRICE</td>
        <td>ROOM VACANT</td>
        <td>ROOM OCCUPIED</td>
        
      </tr>
      <tbody>
        <?php
          while($row = mysqli_fetch_array( $result) ){
        ?>
            <tr>  
               <td><?php echo $row["room_name"]; ?></td>
             
                <td><?php echo $row["room_price"]; ?></td>  
                <td><?php echo $row["room_vacant"]; ?></td>  
                <td><?php echo $row["room_occupied"]; ?></td>  

            </tr> 
            <?php
          }
            ?>
        </table> 
     
        <br/><br/>

      </tbody>
      </table>
    </div>
    </div>
    </div>
    </div>
    <script>  
      $(document).ready(function(){   
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#user').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>  
</div>
</div>
</body>

 <!-- Sidebar -->
  <?php include 'sidebar.php';?>
  </html>


