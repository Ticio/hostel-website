<?php

session_start();

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "test");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", DB_USER, DB_PASS);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully <br />"; 
	 }
catch(PDOException $e)
	{
	echo "Connection failed: " . $e->getMessage();
	}


$query=$conn->prepare("SELECT * FROM cafe WHERE available='yes'");
$query->execute();

$results=$query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE HTML>
	
<html lang="en">
		
	<head>

		<!--  page information start				        -->
		<meta name="author" content="Tício">
		<meta name="description" content="Hostel website">
		<meta name="keywords" content="Css, Php, Javascript, Hostel website">

		<!--  link to stylesheets, page title etc			-->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/cafe.css">

		<title>Cafe</title>

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
				<li><a href="contact_us.php">Contact Us</a></li>
			</ul>
	
		</nav>
		<!--navigation end--> 
		
		<section id="section1">

			<h2 class="">Sample Menu for Café</h2>

			<!--  e.g.
Lentil curry and rice 
Lasagne and salad
Wholemeal Pizza and salad  -->



			<div class="row">
				
					<div class="left">
						
							<h2>Daily specials </h2> 
							
							<p><span>Lentil curry and rice</span><p>
							<p><span>Lasagne and salad</span><p>
							<p><span>Wholemeal Pizza and salad </span><p>

					</div>

					<div class="left">
						
						<h2>All-day Breakfast</h2> 
						
						<p><span>Baked potatoes with fillings</span><p>
						<p><span>Wholemeal bread sandwiches</span><p>
						<p><span>Home baked cakes, Tea breads and flapjacks</span><p>
						<p><span>Fruit puddings</span><p>
						<p><span>Ice cream</span><p>

					</div>

					<div class="left">

						<h2>Tea Varieties on offer</h2> 
						
						<p><span>Machu Pichu coffee</span><p>
						<p><span>Hot chocolate </span><p>
						<p><span>Bottled water</span><p>
						<p><span>Elderflower cordial </span><p>

					</div>
			</div>

		</section>

		<div>
				<h2>Available Menu</h2>

				<?php
					
					$id = 0;

					echo '<ul id="album-fotos">';

					foreach ($results as $row) {
						
						echo '<li id="foto'.$id.'">'
							
								.'<div>'
									.'<p class="center">'.$row['name'].'</p>'
									.'<p> <span> Description: </span>' . $row['description'] . ''
									.'<p> <span> Price: </span>£'.$row['price'] . ''
									.'<p> <span> Category: </span>'.$row['category'] . ''
									.'<p> <span> Available: </span>'.$row['available'] . ''
								.'</div>'

							.'</li>';

						$id++;
					}
					
					echo '</ul>';

					$conn = null;
				?>

		</div>
			
		<!-- Footer section -->
		<footer id="footer">
			<p>All rights reserved. 2018 by Ticio Victoriano</p>
			<p>Copyright &copy;</p>
		</footer>
		<!-- End of the footer section -->
	</body>

</html>