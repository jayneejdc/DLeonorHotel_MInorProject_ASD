<?php include 'header.html';?>
<br><br>
<?php $db= new mysqli('localhost','root','','hotel_reservation'); ?>
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
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-ui.js"></script>  
          
 </head>
 <body>
  <br />
  <div class="container">
      <br />
      <div align="right">
        <a href="logout.php">Logout</a>
      </div>
      <br />
      <div class="container" style="width:900px;">    
                <div class="col-md-3" style="margin-left:30%;">  
                     <input type="text" name="checkin" id="checkin" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3" style="margin-left:30%;">  
                     <input type="text" name="checkout" id="checkout" class="form-control" placeholder="to Date" />  
                </div>  
                <div class="col-md-5;">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div class="col-md-6" style="clear:both; margin-left: 39.2%;margin-bottom: 2px"></div>  
               <input type="button" name="clear" class="btn btn-info" value="Clear" onClick="window.location.reload()">              
                <br />  
    <div id="user">
    <div id="live_data"></div> 
     <div class="panel panel-default" style="width:100%;">
     <div class="panel-heading">BOOKING DETAILS</div>
     <div class="panel-body">
       <span id="message"></span>
        <table class="table table-bordered table-striped">
      <tr>
          <tr>
            <td>ROOM NUMBER</td>
            <td>NAME</td>
            <td>CHECKIN</td>
            <td>CHECKOUT</td>
            <td>NO. OF GUEST</td>
            <td>PAYMENT</td>
            <td>ACTIVITY</td>
            <td>STATUS</td>
        </tr>
      </tr>
        <?php $sql=$db->query("Select * from history ORDER BY num desc");
            foreach ($sql as $key => $user) :
              ?>
        <tr>
            <tr class='dontshow'>
             <tr class='hidethis'>
                <td><?php echo $user['num'] ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['checkin']; ?></td>
                <td><?php echo $user['checkout']; ?></td>
                <td><?php echo $user['numguest']; ?></td>
                <td><?php echo $user['payment']; ?></td>
                <td><button id="hide">Hide</button></td>
                <td>ARCHIVE</td>
            </tr>
          </tr>
       <?php endforeach; ?>
    </table>   
      </table>
<style>
  .dontshow {
    display:none;
}
</style>


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
                $("#checkin").datepicker();  
                $("#checkout").datepicker();  
           });  
           $('#filter').click(function(){  
                var checkin = $('#checkin').val();  
                var checkout = $('#checkout').val();  
                if(checkin != '' && checkout != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{checkin:checkin, checkout:checkout},  
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

  <script>
      $("#hide").on("click", function () {
      var rows = document.getElementsByClassName("hidethis");
      for (var i = 0; i < rows.length; i++) {
          rows[i].setAttribute("class", "hidethis dontshow");
      }
    });

  </script>

</div>
</div>
</body>
  </html>


