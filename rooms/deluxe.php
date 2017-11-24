<?php include '../html/rooms.html';?>
<?php include '../html/css.html';?>
<!DOCTYPE html>
<html>
<head>
	<title>Deluxe</title>
	<link rel="stylesheet" type="text/css" href="../Styles/stand.css">
	<script src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('input[type="radio"]').click(function(){
		        var inputValue = $(this).attr("value");
		        var targetBox = $("." + inputValue);
		        $(".box").not(targetBox).hide();
		        $(targetBox).show();
		    });
		});
	</script>

	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script type="text/javascript" src="js/jquery-ui.js"></script>
</head>

<body>
	<div class="room">
		<h3 style="margin-left: 5%; margin-top: 7%;"><center>Deluxe Room Type</center></h3>
		<img src="../Images/rooms/dl.png" style="width: 90%; margin-left: 2%; margin-top: -15%;">
		<div class="rText">
			<h4>Php 2,400.00</h4>
			<h5>Max. of 3persons</h5>
			<p>Deluxe Rooms are executed at 28sqm, each is equipped with a king or twin beds, a 40-inch LED HDTV with cable channels, media panel with HDMI, USB and audio-visual connectivity, complimentary Wi-Fi and broadband internet access, IDD phone with iPod dock, alarm clock, voice mail and radio,coffee and tea making facilities, mini-bar and in-room safe.</p>		
			<br><br>	
		</div>
	</div>
	
	<div class="sideform" style="color: black; font-family: 'Bad Script', cursive;
		src: url('../insert/font-awesome/BadScript-Regular.ttf');">
		<div style="margin-left: 5%; padding: 5%;">
			<div class="payment">
				<label style="margin-left: 5%;">Payment Method
		   		<div>
	    	    	<label><input type="radio" name="payment" value="red"> PAY AT HOTEL</label>
		        	<label><input type="radio" name="payment" value="green">CREDIT/DEBIT CARD</label>
			    </div>
			    <div class="red box">
			    	<form action="../insert/dpinsert.php" method="POST">
			    	<div class="reservationInfo">
						<h2><center>Reservation Info</center></h2>
						<label>Check-in:<input id="txtstartdate" name="checkin" min="2017-11-16" required></label>
						<br><label>Check-out:<input id="txtenddate" name="checkout" required></label>
						<br><label>No. of Guests: <input type="number" placeholder="per room" name="guests" max="2" required></label>
					</div>
					<div class="personal">
						<h2><center>Personal Information</center></h2>
						<label>First Name:<input type="text" name="firstname" required></label>
						<label>Last Name:<input type="text" name="lastname" required></label>
						<label>Contact Number:<input type="text" name="contact"  required></label>
					</div>
    				<div class="btn">
						<a href="../insert/dpinsert.php"><input type="submit" name="submit" value="Reserve"></a>	
					</div>
					</form>
			    </div>
    			<div class="green box">
    				<form action="../insert/dcinsert.php" method="POST">
    				<div class="reservationInfo">
						<h2><center>Reservation Info</center></h2>
						<label>Check-in:<input id="start" name="checkin" min="2017-11-16" required></label>
						<br><label>Check-out:<input id="end" name="checkout" required></label>
						<br><label>No. of Guests: <input type="number" placeholder="per room" name="guests" max="2" required></label>
					</div>
					<div class="personal">
						<h2><center>Personal Information</center></h2>
						<label>First Name:<input type="text" name="firstname" required></label>
						<label>Last Name:<input type="text" name="lastname" required></label>
						<label style="margin-left: 5%;">Contact Number:<input type="text" name="contact"  required></label>
						<label>Card Number:<input type="text" name="cardnum" ></label>
	    				<label style="margin-left: 5%;">Validation Number<input type="text" name="valid" ></label>
	    				<label>Expiration Date<input type="month" id="myMonth" style = "width:55%;" value="2017-11" name="expdate" ></label>
	    				<label>Cardholder Name<input type="text" name="cardname" ></label>
	    				<p><strong>DISCLAIMER: </strong> D` Leonor Hotel authenticates all debit and credit card transactions and reserves the right to refuse you, we determine that the payment of your room has been done fraudulently or unlawfully. Some banks may charge additional fees for this transaction.</p>
					</div>
    				<div class="btn">
						<a href="../insert/dcinsert.php"><input type="submit" name="submit" value="Reserve"></a>	
					</div>
					</form>
    			</div>
				</label>
			</div>
		</div>
	</div>
</body>
<script>
	$("#txtstartdate").datepicker({
  minDate: 0,
  onSelect: function(date) {
    $("#txtenddate").datepicker('option', 'minDate', date);
  }
});

$("#txtenddate").datepicker({});

$("#start").datepicker({
  minDate: 0,
  onSelect: function(date) {
    $("#end").datepicker('option', 'minDate', date);
  }
});

$("#end").datepicker({});
</script>
</html>