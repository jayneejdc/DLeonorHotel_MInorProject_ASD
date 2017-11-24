<?php include 'html/header.html';?>


<!DOCTYPE html>
<html>
<head>
	<title>D'Leonor Hotel</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Styles/sty.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div id="container">
		<div class="slides">
			<p>Welcome to D'Leonor Hotels</p>
			<img src="Images/hotel9.jpg" style="width: 100%;  height: 680px;  margin-left: -1%; margin-top: -5%;" />
			<a class="btn" href="la/login.html" style="font-family:'Bad Script', cursive; src: url('font-awesome/BadScript-Regular.ttf');">BOOK NOW</a>
		</div>
		<div  class="slides">
			<p>Be happy in our Luxury Rooms</p>
			<img src="Images/hotel4.jpg" style="width: 100%; height:680px;  margin-left: -1%; margin-top: -5%;"/>
			<a class="btn" href="la/login.html" style="font-family: 'Bad Script', cursive; src: url('font-awesome/BadScript-Regular.ttf');">BOOK NOW</a>
		</div>
		<div  class="slides">
			<p>Have a great time with our private environment</p>
			<img src="Images/outdoor.jpg" style="width: 100%; height:680px;  margin-left: -1%; margin-top: -5%;"/>
			<a class="btn" href="la/login.html" style="font-family: 'Bad Script', cursive; src: url('font-awesome/BadScript-Regular.ttf')";>BOOK NOW</a>
		</div>
		<div  class="slides">
			<p>Enjoy staying in our Luxury Rooms</p>
			<img src="Images/hue.jpg" style="width: 100%; height:680px;  margin-left: -1%; margin-top: -5%;"/>
			<a class="btn" href="la/login.html" style="font-family: 'Bad Script', cursive; src: url('font-awesome/BadScript-Regular.ttf');">BOOK NOW</a>
		</div>
	</div>
		<script>
			var index = 1;
			function plusIndex(n){
				index = index + n;
				showImage(index);
			}
			showImage(1);
			function showImage(n){
				var i;
				var x = document.getElementsByClassName("slides")
				if( n > x.length ){ index = 1};
				if( n < 1) { index = x.length};
				for(i=0;i<x.length;i++ ){
					x[i].style.display = "none";
				}
				x[index-1].style.display = "block";
			}
			autoSlide();
			function autoSlide(){
				var i;
				var x = document.getElementsByClassName("slides")
				for(i=0;i<x.length;i++ ){
					x[i].style.display = "none";
				}
				if(index > x.length){
					index = 1
				}
				x[index-1].style.display = "block";
				index++;
				setTimeout(autoSlide, 3000);
			}
		</script>
	</div>
	<img src="Images/gold.png"; id="pic1" style="width: 70%; height: 200px; margin-left: 13%;">

	<div id="ammenities" class="fluid-container col-lg-12">
		<div>
			<br>
			<h1>	
				Ammenities
			</h1>
			<p>All of these ammenities are included in every booking made for each guests.</p>
		</div>

		<div class="allam">
			<div class="ab col-4" style="margin-top: 5%; margin-left: 10%;">
				<img src="Images/shuttle.png" class="ab-pic">
				<h5>Shuttle Service</h5>
			</div>
			<div class="ab col-4" style="margin-top: -13.3%; margin-left: 25%;">
				<img src="Images/coffee.png" class="ab-pic" style="width: 12%;" ">
				<h5>Free Coffee</h5>
			</div>
			<div class="ab col-4" style="margin-top: -13.3%; margin-left: 40%;" >
				<img src="Images/wifi.png" class="ab-pic" style="width: 15%;">
				<h5>Free Wifi</h5>
			</div>
			<div class="ab col-4" style="margin-top: -13.3%; margin-left: 55%;">
				<img src="Images/bar.png" class="ab-pic" style="width: 20%;">
				<h5>Free Bar</h5>
			</div>
			<div class="ab col-4" style="margin-top: -13.3%; margin-left: 70%;">
				<img src="Images/meal.png" class="ab-pic" style="width: 30%;">
				<h5>Free Breakfast</h5>
			</div>		
		</div>		
	</div>

	<img src="Images/gold.png"; id="pic2" style="width: 70%; height: 200px; margin-left: 13%;">

	<div id="about" class="fluid-container col-lg-12">
		<br>
			<h1>
				About Us
			</h1>
			<img src="Images/hotel11.jpg" style="width: 40%; height: 80%; float: right; margin-top: -5.5%; margin-right: 1%; border: 2px solid rgb(218,165,32);" >
			<p>
				<br>
				The D'Leonor Hotel offers a new experience in hospitality − urban lifestyle hotels.<br>In which contemporary design with the local vibe to create an inviting place where relaxation, play, and work can mix. Thus, while every room type displays D'Leonor's trademark style and service, each has a distinct personality all its own.
				D'Leonor hotel is located at Purok 5, Barangay Communal, Buhangin, Davao City...
			</p>
			<br>
	</div>
	<br>
	<img src="Images/gold.png"; id="pic3" style="width: 70%; height: 200px; margin-left: 13%;">

	<div id="contact" class="fluid-container col-lg-12">
			<br>
			<h1>Contact Us</h1>
			<p>
				<br>
				Tel no. +82 2-8511-8891<br>
				Yahoo: dleonorinlandresort14@gmail.com<br>
				Yahoo: dleonorinlandresort14@yahoo.com<br>
				Facebook: dleonorinlandresort14@facebook.com<br>
			</p>
			<div class="icons">
			<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			<br>
	</div>
	<br><br><br>
	<img src="Images/gold.png"; style="width: 100%; height: 200px; margin-left: -1%;">
</body>
</html>