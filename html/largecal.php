<html>

	<head>
		<script type="text/javascript" src="js/header.js"></script>
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/onecollayout.css">
	</head>

	<body>
	<div class = "container">



<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ HEADER AND NAVBAR ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

	<header>	
		<div id = "textbanner">
			<marquee >Welcome to Banquet Event System Version 1.0.0 ------- Routine maintenance will take place on June 1, 2016 at 12:00am central standard time. At this time the webservice may become inaccessable for short periods of time.
			</marquee>
		</div>
		<div class = "wrapper">
			<div class = "title">
				<h1>Banquet Event System</h1>
				<h2>Powered by Jamison Mobile Applications</h2>
			</div>
		</div>
	</header>


	<div class = "navcontainer">
		<div class ="navwrapper">
			<div class = "navBar">
				<div class = "bar">
				<ul>
					<li><a id = "one" class="active" href="Test.php">HOME</a></li>
					<li><a id = "two"  href="CreateClient.php">EVENTS</a></li>
					<li><a  id = "three" href="#news">RESERVATIONS</a></li>
					<li><a  id = "four" href="#contact">CONTACT US</a></li>
					<li><a id = "five" href="#about">SUPPORT</a></li>
				</ul>
				</div>

					<div id = "dropdown" class ="dropdown">
					<ul>
						<li><a href ="CreateClient.php">Add Event</a></li>
						<li><a href ="CreateCategory.html">Add Category</a></li>
						<li><a href ="CreateLocation.html">Add Location</a></li>
						<li><a href ="CreateEvent.html">Edit Event</a></li>
						<li><a href ="CreateEvent.html">Edit Category</a></li>
						<li><a href ="CreateEvent.html">Edit Location</a></li>
					</ul>
				</div>

				<div id = "dropdownhome" class = "dropdown">
					<p>Put something here later.</p>
				</div>

			
		</div>

	
	
			<div class ="searchform">
				<form>
					<select name="Category">
						<option value="changelater">All Categories</option>
					  	<option value="changelater">Ballroom 1</option>
					  	<option value="changelater">Ballroom 2</option>
					  	<option value="changelater">Martini Lounge</option>
					  	<option value="changelater">Dining Room</option>
					  	<option value="changelater">Conference Room</option>
					</select>

					<input type="text" name="search" placeholder="Search Events">
					<input id = "search" type="button" value="Search">

				</form>
			</div>
		</div>
	</div>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ END OF HEADER AND NAVBAR ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->




<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ MAIN CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<div class = "maincontenrwrapper">
		<div class = "contentwrapper">
			<div class = "contentpadding">

				<div class = "onecolumncontent">
						<?php include 'php/largecalscript.php'; ?>
				</div>

			</div>
		</div>
	</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ END OF MAIN CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

	<div class = "footerwrapper">
		<div class = "footercontent">

			<div class = "one">
				<div class ="insidefooter">
				<h1>Important links</h1>
				<ul>
					<li>Home</li>
					<li>Events</li>
					<li>Reservations</li>
					<li>Contact Us</li>
					<li>Support</li>
				</ul>
				</div>
			</div>

			<div class = "two">
				<div class ="insidefooter">
					<h1>some other information</h1>
					<ul>
						<li>Cool</li>
						<li>Neat</li>
						<li>Wow</li>
						<li>So Cool</li>
						<li>Nice</li>
					</ul>
				</div>
			</div>

			<div class = "three">
				<div class ="insidefooter">
					<h1>Support</h1>
					<ul>
						<li>Jamison Mobile Applications</li>
						<li>support@jamisonmobile.com</li>
						<li>Jamison mobile facebook page/li>
						<li>918-123-4567</li>
						<li></li>
					</ul>
				</div>
			</div>

		</div>
	</div>

	<div class ="superfooterwrapper">
		<div class ="superfooter">
			<p>Some copyright information and all the small text that is at the bottom of professional web pages.</p>
		</div>
	</div>

	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ END OF FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	</div>
	</body>

	<script type="text/javascript" src = "js/dropdown.js"></script>

</html>