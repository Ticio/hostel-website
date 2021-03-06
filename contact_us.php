
<!DOCTYPE HTML>
	
<html lang="en">
		
	<head>

		<!--  page information start				        -->
		<meta name="author" content="Tício">
		<meta name="description" content="Hostel website">
		<meta name="keywords" content="Css, Php, Javascript, Hostel website">

		<!--  link to stylesheets, page title etc			-->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/contacts.css">

		<title>Contact Us</title>

		<!--  this information does not display on page  	-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<!-- -->

	</head>

	<body>

		<!--banner start-->
		<header>
			<img src="images/banners/banner.png" alt="banner"/>
		</header>		
		<!--banner end-->

		<!--navigation start-->
		<nav> 
			<!-- add menus etc -->
			<ul>
	
				<li id="hostel-logo">
					<a href="index.html">Backpacker</a>
				</li>
	
				<li><a href="index.html">Home Page</a></li>
				<li><a href="facilities.html">Facilities</a> </li>
				<li><a href="cafe.php">Cafe</a></li>
				<li><a href="gettingHere.html">Getting Here</a> </li>
				<li><a href="contact_us.html">Contact Us</a></li>
			</ul>
	
		</nav>
	<!--navigation end--> 
		<div id="form-section" class="container">

			<?php 
				
				if ( isset($_SESSION['message'])) 
				{	echo $_SESSION['message'];  }
				else
				{ 	echo "<h4> Enter your name and contact details and we'll get in touch with you as soon as possible. </h4>"; }
				
			?>

			

			<form id="contactForm" action="processInput.php" class="form" method="post">
					<ul>
						<li><label>Full Name <span class="required">*</span></label>
							<input type="text" name="first" class="field-divided" placeholder="First" />
							&nbsp;<input type="text" name="last" class="field-divided" placeholder="Last" /></li>
						<li>
							<label>Email <span class="required">*</span></label>
							<input type="email" name="email" class="field-long" />
						</li>
						
						<li>
							<label>Your Message <span class="required">*</span></label>
							<textarea name="message" id="message" class="field-long message"></textarea>
						</li>
						<li>
							<input type="submit" value="Submit" />
						</li>
					</ul>
			</form>

		</div>
		
		<!-- Footer section -->
		<footer id="footer">
			<p>All rights reserved. 2018 by Ticio Victoriano</p>
			<p>Copyright &copy;</p>
		</footer>
		<!-- End of the footer section -->

	</body>

</html>