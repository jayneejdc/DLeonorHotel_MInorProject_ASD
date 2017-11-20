<?php include '../html/rooms.html';?>
<?php include '../html/css.html';?>
<!DOCTYPE html>
<html>
<head>
	<title>Deluxe</title>
	<link rel="stylesheet" type="text/css" href="../Styles/rooms.css">
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
	<div class="room" style="color: white; background-color: rgba(40,40,40,1);">
		<h3 style="margin-left: 5%; margin-top: 7%; "><center>Deluxe Room Type</center></h3>
		<img src="../Images/rooms/dl.png" style="width: 90%; margin-left: 2%; margin-top: -15%;">
		<div class="rText">
			<h4 style="color: white;" >Php 2,400.00</h4>
			<h5 style="color: white;">Max. of 3persons</h5>
			<p style="color: white;">Deluxe Rooms are executed at 28sqm, each is equipped with a king or twin beds, a 40-inch LED HDTV with cable channels, media panel with HDMI, USB and audio-visual connectivity, complimentary Wi-Fi and broadband internet access, IDD phone with iPod dock, alarm clock, voice mail and radio,coffee and tea making facilities, mini-bar and in-room safe.</p>		
			<br><br>	
		</div>
	</div>
	
	<div class="sideform" style="color: rgb(255,215,0); margin-top: 2%;">
		<div style="margin-left: 5%; padding: 5%;">
			<div class="payment">
				<label style="margin-left: 5%; color: black;">Payment Method
		   		<div>
	    	    	<label><input type="radio" name="payment" value="red"> PAY AT HOTEL</label>
		        	<label><input type="radio" name="payment" value="green">CREDIT/DEBIT CARD</label>
			    </div>
			    <div class="red box">
			    	<form action="../insert/dpinsert.php" method="POST">
			    	<div class="reservationInfo">
						<h2><center>Reservation Info</center></h2>
						<label>Check-in:<br><input id="txtstartdate" name="checkin" min="2017-11-16" required></label>
						<br><label>Check-out:<br><input id="txtenddate" name="checkout" required></label>
						<br><label>No. of Guests:<br><input type="number" placeholder="per room" name="guests" max="6" required></label>
					</div>
					<div class="personal">
						<h2><center>Personal Information</center></h2>
						<label>First Name:<input type="text" name="firstname" required> Last Name:<input type="text" name="lastname" required></label>
						<label>Contact #: <input type="text" name="contact" style="width: 50%; margin-left: 2%;" required></label>
					</div>
					<br><input type="checkbox" name="terms" value="terms" required><label style="color: black;"> I have read and agreed to the </label> <a href="../terms.pdf" download>Terms and Condition<br>
    				<div class="btn">
						<a href="../insert/dpinsert.php"><input type="submit" name="submit" value="Reserve"></a>	
					</div>
					</form>
			    </div>
    			<div class="green box">
    				<form action="../insert/dcinsert.php" method="POST">
    				<div class="reservationInfo">
						<h2><center>Reservation Info</center></h2>
						<label>Check-in:<br><input id="start" name="checkin" min="2017-11-16" required></label>
						<br><label>Check-out:<br><input id="end" name="checkout" required></label>
						<br><label>No. of Guests:<br><input type="number" placeholder="per room" name="guests" max="6" required></label>
					</div>
					<div class="personal">
						<h2><center>Personal Information</center></h2>
						<label>First Name:<input type="text" name="firstname" required> Last Name:<input type="text" name="lastname" required></label>
						<label>Contact #:<input type="text" name="contact" style="margin-left: 2%;" required> Card #:<input type="text" name="cardnum" style="margin-left: 6%;" ></label>
	    				<label>Validation #<input type="text" name="valid" > Exp. Date<input type="month" id="myMonth" style = "margin-left: 2.5%;" value="2017-11" name="expdate" ></label>
	    				<label>Cardholder Name<input type="text" name="cardname" style="width: 62.66%;" ></label>
	    				<br><input type="checkbox" name="terms" value="terms" required><label> I have read and agreed to the </label> <a href="../terms.pdf" download>Terms and Condition<br></a><br>
	    				<p><strong>DISCLAIMER: </strong> D` Leonor Hotel authenticates all debit and credit card transactions and reserves the right to refuse you, we determine that the payment of your room has been done fraudulently or unlawfully. Some banks may charge additional fees for this transaction.</p></a>
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