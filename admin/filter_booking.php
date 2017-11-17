<?php
// Range.php
if(isset($_POST["from_date"], $_POST["to_date"]))
{
  $conn = mysqli_connect("localhost", "root", "", "hotel_reservation");
  $result = '';
  $query = "SELECT * FROM booking WHERE check-in BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
  $sql = mysqli_query($conn, $query);
  $result .='
  <table class="table table-bordered table-striped">
  <tr>
        <td>BOOKING ID</td>
        <td>LASTNAME</td>
        <td>FIRSTNAME</td>
        <td>CHECK-IN</td>
        <td>CHECK-OUT</td>
        <td>ROOM TYPE</td>
        <td>ROOM #</td>
        <td>NO. OF GUEST</td>
        <td>AMOUNT</td>
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
      <td>'.$row["check-in"].'</td>
      <td>'.$row["check-out"].'</td>
      <td>'.$row["room_type"].'</td>
      <td>'.$row["room_no"].'</td>
      <td>'.$row["Tguest"].'</td>
      <td>'.$row["amount"].'</td>
      <td><button type="button" name="delete_btn" data-id3="'.$row["user_ID"].'" class="btn btn-xs btn-danger btn_delete">ARCHIVE</button></td>  
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