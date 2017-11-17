<?php
// Range.php
if(isset($_POST["from_date"], $_POST["to_date"]))
{
  $conn = mysqli_connect("localhost", "root", "", "hotel_reservation");
  $result = '';
  $query = "SELECT * FROM history WHERE date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
  $sql = mysqli_query($conn, $query);
  $result .='
  <table class="table table-bordered table-striped" style="margin-left:19%;">
  <tr>
        <td>USER ID</td>
        <td>USERNAME</td>
        <td>ACTIVITY</td>
        <td>DATE</td>
        <td>STATUS</td>
 </tr>';
  if(mysqli_num_rows($sql) > 0)
  {
    while($row = mysqli_fetch_array($sql))
    {
      $result .='
      <tr>
      <td>'.$row["user_ID"].'</td>
      <td>'.$row["username"].'</td>
      <td>'.$row["activity"].'</td>
      <td>'.$row["date"].'</td>
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