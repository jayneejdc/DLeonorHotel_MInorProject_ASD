<?php
    $db_host = 'localhost'; // Server Name
    $db_user = 'root'; // Username
    $db_pass = ''; // Password
    $db_name = 'hotel_reservation'; // Database Name

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
      if (!$conn) {
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
      }

      $options="";

      $sql = 'SELECT * 
          FROM standard';
          
      $query = mysqli_query($conn, $sql);

      if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
      }

      while ($row = mysqli_fetch_array($result)) {
        $options = $options."<option>$row[1]</option>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.3.3.7.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
      <h2></h2>
      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD ROOMS</button>

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
   <form>
      
          <div class="sideform">
                 <h4>ADD ROOMS</h4>
                 <h5>ROOM TYPE</h5>
                  <select>
                     <option value="volvo"></option>
                      <option value="volvo">STANDARD</option>
                      <option value="saab">DE LUXE</option>
                      <option value="opel">JUNIOR SUITE</option>
                      <option value="audi">SUITE</option>
                  </select>
                    <h6>Quantity:</h6>
                    <input type="number" name="quantity" min="1"><br>
                    <br><br>
                    <input type="submit">
              </form>
         </div>
          
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
