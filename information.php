<?php include 'html/header.html';?>

<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hotel_reservation';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM room_type";
$options="";
$result = mysqli_query($mysqli, $query);

while ($row = mysqli_fetch_array($result)) {
	$options = $options."<option>$row[1]</option>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Page</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Styles/room_confirmation.css">
</head>
<body>
	<div class="box" style="margin-top: 2%;">
		<div id="pics">
			<?php
				if (isset($_POST['picked'])) {
					if ($_POST['picked']=="Suite") {
						echo '<img src="Images/rooms/su2.png" class="rooms-pic">';
					}elseif ($_POST['picked']=="Standard") {
						echo '<img src="Images/rooms/s.png" class="rooms-pic">';
					}elseif ($_POST['picked']=="De Luxe") {
						echo '<img src="Images/rooms/dl.png" class="rooms-pic">';
					}elseif ($_POST['picked']=="Junior Suite") {
						echo '<img src="Images/rooms/j1.png" class="rooms-pic">';
					}
				}
			?>
		</div>
		<h2>
			<?php
				if (isset($_POST['picked'])) {
					if ($_POST['picked']=="Suite") {
						echo "Suite";
					}elseif ($_POST['picked']=="Standard") {
						echo "Standard";
					}elseif ($_POST['picked']=="De Luxe") {
						echo "De Luxe";
					}elseif ($_POST['picked']=="Junior Suite") {
						echo "Junior Suite";
					}
				}
			?>
		</h2>
		<h3 id="amnt">
			<?php
				if (isset($_POST['picked'])) {
					if ($_POST['picked']=="Suite") {
						echo "Php 3,200.00";
					}elseif ($_POST['picked']=="Standard") {
						echo "Php 2,000.00";
					}elseif ($_POST['picked']=="De Luxe") {
						echo "Php 2,400.00";
					}elseif ($_POST['picked']=="Junior Suite") {
						echo "Php 2,800.00";
					}
				}
			?>
		</h3>
		<div>
			<?php
				if (isset($_POST['picked'])) {
					if ($_POST['picked']=="Suite") {
						echo "It provides access to the Club Lounge where guests enjoy exclusivity and premium service; daily Continental breakfast; all-day refreshments and cocktails; iMac stations; work tables; reading materials; a wide-screen LED HDTV with cable channels; and secretarial assistance.";
					}elseif ($_POST['picked']=="Standard") {
						echo "With a floor area of 35 sqm, additional features include a bath tub and kitchenette, as well as Club Lounge access.";
					}elseif ($_POST['picked']=="De Luxe") {
						echo "Deluxe Rooms are executed at 28sqm, each is equipped with a king or twin beds, a 40-inch LED HDTV with cable channels, media panel with HDMI, USB and audio-visual connectivity, complimentary Wi-Fi and broadband internet access, IDD phone with iPod dock, alarm clock, voice mail and radio,coffee and tea making facilities, mini-bar and in-room safe.";
					}elseif ($_POST['picked']=="Junior Suite") {
						echo "The most commonly defined as a room that features a separate living-sitting area, in addition to the bedroom. ";
					}
				}
			?>
		</div>
	</div>

	<div class="sideform" style="margin-left: 30px; color: black; font-family: 'Bad Script', cursive; src: url('font-awesome/BadScript-Regular.ttf');">
		<h2><center>Booking Info</center></h2>
		<form action="information.php" method="POST" style="margin-left: 30px;">
			<br><br><label>Room Type:  
				<select name="picked" onchange = "this.form.submit();">
					<OPTION><?php
						if (empty($_POST['picked'])) {
							echo "";
						}else{
							echo $_POST['picked'];
						}
					 ?></OPTION>
					<?php echo $options; ?>
				</select>
			</label>
		</form>
		<form action="insert.php" method="POST" style="margin-left: 30px; color: white; font-family: 'Bad Script', cursive; src: url('font-awesome/BadScript-Regular.ttf');">
			<br><br><label>Check-in:<input type="date" name="checkin" min="2017-11-16" required></label>
			<br><br><label>Check-out:<input type="date" name="checkout" required></label>
			<br><br><label>Guests: <input type="number" name="guests" required></label>
			<div class="btn">
				<a href="insert.php"><input type="submit" name="submit" value="Reserve"></a>	
			</div>
		</form>
	</div>
	<div class="sideform" style="margin-top: 5%; color: white; font-family: 'Bad Script', cursive;
	src: url('font-awesome/BadScript-Regular.ttf');">
		<div style="margin-left: 5%;">
			<h2><center>Add-Ons</center></h2>
			<br>
			<label>Extra Bed: <input type="number" name="bed" required></label>
			<label>Extra Towel: <input type="number" name="towel" required></label>
			<label>Extra Blanket: <input type="number" name="blanket" required></label>
			<label>Extra Pillow: <input type="number" name="pillow" required></label>
			<label>Extra Bath Robe: <input type="number" name="robe" required></label>
			<label>Tent Bringers: <input type="number" name="ten" required></label>
			<br><br>
		</div>
	</div>
</body>
</html>