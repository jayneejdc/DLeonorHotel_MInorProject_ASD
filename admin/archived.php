<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
    
?>

<!DOCTYPE html>
<html>
<body>
<h1>ARCHIVED FILES</h1>
<?php 
$query = "SELECT * FROM history";
$result = mysqli_query($mysqli, $query);
while ($row = mysqli_fetch_array($result)) : ?>

  <tr>
    <td>
    
      <form method="post" action="old.php">
        <?php if ($row[9]=="1") : ?>
        <?php echo $row[1].$row[2].$row[3].$row[4].$row[5].$row[6]; ?>
        <input type="submit" name="action" value="Unarchive"/>
        <input type="hidden" name="picked" value="<?php echo $row['booking_id']; ?>"/>
        <br>
      </form>
    </td>
  </tr>
<?php endif; ?>
<?php endwhile; ?>
</body>
</html>