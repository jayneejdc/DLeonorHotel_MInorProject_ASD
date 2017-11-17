<?php include 'header.html';?>
<br><br>
<?php $db= new mysqli('localhost','root','','hotel_reservation'); ?>
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
      <div class="container" style="width:900px;">    
                <div class="col-md-3" style="margin-left:30%;">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3" style="margin-left:1%;">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5;">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div class="col-md-6" style="clear:both; margin-left: 39.2%;margin-bottom: 2px"></div>  
               <input type="button" name="clear" class="btn btn-info" value="Clear" onClick="window.location.reload()">              
                <br />  
    <div id="user">
    <div id="live_data"></div> 
     <div class="panel panel-default" style="margin-left:30%; margin-top: 5%;">
     <div class="panel-heading">HISTORY DETAILS</div>
     <div class="panel-body">
       <span id="message"></span>
      <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <table >
        <tr>
          <tr class='dontshow'>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
            <td>STATUS</td>
        </tr>
      </tr>
        <?php $sql=$db->query("Select * from history");
            foreach ($sql as $key => $user) :
              ?>
        <tr>
            
             <tr class='hidethis'>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['activity']; ?></td>
                
                <td><button id="hide">Hide</button></td>
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
 <!-- Sidebar -->
<?php include 'sidebar.php';?>

  </html>


