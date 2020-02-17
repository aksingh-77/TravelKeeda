<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Travel Keeda</title>
	<link rel="stylesheet" type="text/css" href="..\CSS\homepage.css">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>
<body>

	<header>
		<div class="bgimage">
			<div class="menu">

				<div class="leftmenu">
		        	<h4>Travel Keeda</h4>		
				</div>

				<div class="rightmenu">
					<ul>
						<li><a href="homepage.php">Home</a></li>
						<?php if(isset($_SESSION['id'])): ?>
						<li>a class="link" href="homepage.php" style="text-decoration:none">logout</a></li>
						<?php else: ?>
						  <li><a class="link" href="login.php" style="text-decoration:none">login</a></li>
						  <li><a class="link" href="signup.php" style="text-decoration:none">sIGNUP</a></li>
						<?php endif; ?>
						
                        <li><a href="city.html">City</a></li>
						<li>
						  <div class="dropdown">
							Themes 
							  <i class="fa fa-caret-down"></i>
							
							<div class="dropdown-content">
							  <a href="..\Beach.html" target="_blank">Beach</a>
							  <a href="..\Pilgrimage.html" target="_blank">Pilgrimage</a>
							  <a href="..\Heritage.html" target="_blank">Heritage</a>
							  <a href="..\Wildlife.html" target="_blank">Wildlife</a>
							  <a href="..\Hill-station.html" target="_blank">Hill Station</a>
							</div>
						  </div>
						</li>
						
					</ul>
				</div>
			</div>
			
			
				<div class="text">
					<h1>EXPLORE INDIA</h1>		
					<h3>WITH TRAVEL KEEDA</h3>
				</div>

				<!--<form autocomplete="off">
					<div class="search_box">
						<div class="autocomplete">
							<input type="text" placeholder="Search Here" id="myInput">
							
							<script type="text/javascript" src="homepage.js"></script>

						</div>
						<div class="fas fa-search"></div>
					</div>
				</form>-->
			
		</div>
	
	</header>

	<br>

	<div class="main">
		<div class="destination"><h1>Hot Destination</h1></div>

        <!-- this is card for Mumbai---------- -->
		
		<div class="card1">

			<div class="image">
			   	<img src="..\IMAGE\mumbai.jpg" alt="Gate Way Of India">
			</div>
			<div class="title">
				<h1><a href="..\HTML\mumbai.html">Mumbai</a></h1>
			</div>
		</div>
	 <!-- this is card for Goa---------- -->
		<div class="card1">

			<div class="image">
			   <img src="..\IMAGE\goa2.jpg" alt="Beach">
			</div>
			<div class="title">
			 <h1><a href="..\HTML\goa.html">Goa</a></h1>
			</div>
		</div>
			
<!-- this is card for Delhi---------- -->
	    <div class="card1">

			<div class="image">
			   <img src="..\IMAGE\delhi.jpg" alt="Gate Way Of India">
			</div>
			<div class="title">
			 <h1 style="color:aliceblue;"><a href="#">Delhi</a></h1>
			</div>
		</div>

		<hr style="color: grey">

		<footer>
			<center><p>Travel Keeda Pvt LTD. All Rights are Reserved</center>
		</footer>

		
	
</div>
</body>
</html>