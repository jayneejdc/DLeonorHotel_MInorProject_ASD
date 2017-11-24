<?php
// Range.php
if(isset($_POST["checkin"], $_POST["checkout"]))
{
  $conn = mysqli_connect("localhost", "root", "", "hotel_reservation");
  $result = '';
  $query = "SELECT * FROM history WHERE checkin BETWEEN '".$_POST["checkin"]."' AND '".$_POST["checkout"]."'";
  $sql = mysqli_query($conn, $query);
  $result .='
  <table class="table table-bordered table-striped" style="margin-left:19%;">
  <tr>
        <td>ID</td>
            <td>LASTNAME</td>
            <td>FIRSTNAME</td>
            <td>CHECKIN</td>
            <td>CHECKOUT</td>
            <td>NO. OF GUEST</td>
            <td>ROOM NUMBER</td>
            <td>PAYMENT</td>
            <td>ACTIVITY</td>
            <td>STATUS</td>
 </tr>';
  if(mysqli_num_rows($sql) > 0)
  {
    while($row = mysqli_fetch_array($sql))
    {
      $result .='
      <tr>
      <td>'.$row["booking_id"].'</td>
      <td>'.$row["lastname"].'</td>
      <td>'.$row["firstname"].'</td>
      <td>'.$row["checkin"].'</td>
      <td>'.$row["checkout"].'</td>
      <td>'.$row["numguest"].'</td>
      <td>'.$row["num"].'</td>
      <td>'.$row["payment"].'</td>
      <td>'.$row["activity"].'</td>
      <td><button type="button" name="delete_btn" data-id3="'.$row["booking_id"].'" class="btn btn-xs btn-danger btn_delete">ARCHIVE</button></td>  
      </tr>';

    }
  }
  else
  {
    $result .='
    <tr>
    <td colspan="5">No Purchased Item Found</td>
    </tr>';
  }
  $result .='</table>';
  echo $result;
}
?>