<?php 

include "includes/functions.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="libs/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="libs/animate.min.css">
	<link rel="stylesheet" type="text/css" href="libs/jRange/jquery.range.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
</head>

<body>

<!-- Start Scroll To Top Button -->

<a href="#" class="scroll-top"><i class="fas fa-chevron-up"></i></a>



<!-- End Scroll To Top Button -->


<!---------------------------- Start Search Overlay ---------------------------->

<div class="search-overlay text-center">
		<span>X</span>
<form action="" method="GET">
	<h1>Search Here</h1>
	<div class="form-group">
		<input type="text" name="search" placeholder="Type to search..." autocomplete="off">
	</div>

</form>

</div>



<!---------------------------- End Search Overlay ---------------------------->




<!-- Start Header -->

<div class="header">

	<div class="header-info text-center">
		<div class="container">
			<div class="row">
					<div class="row">
						<div class="contact-item">
							<i class="fas fa-phone-alt"></i><span> +216 55222000</span>
						</div>
						<div class="contact-item">
							<i class="fas fa-envelope"></i><span> example@info.com</span>
						</div>
					</div>
				

					<div class="header-setting ml-auto">
						<div class="row">
							<div class="setting-item">
								<i class="fas fa-user"></i>

								<?php
								if(isset($_SESSION["user"]))
								{
									echo "<span><a href='account.php'>".$_SESSION["user"]."</a> | <a href='logout.php'>Logout</a></span>";
								}
								else
								{

									echo "<span><a href='login.php'>Login</a> / <a href='register.php'>Register</a>
										</span>";
								}
								
								?>

							</div>

							<div class="setting-item">
								<i class="fas fa-shopping-cart"></i>
							</div>
		
							<div class="setting-item">
							    <i class="fas fa-search"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<!-- Start Main Navbar -->
	<div class="main-nav">
		<div class="container">	
			<nav class="navbar navbar-expand-lg navbar-light">
				 <div class="navbar-brand">
						<a href="index.php">MegaShop</a>
						<span class="description">Best e-Commerce Shop</span>
					</div>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				 
				<div class="collapse navbar-collapse" id="navbar">
				    <ul class="navbar-nav ml-auto">
				    
				    	<li class="nav-item">
				        <a class="nav-link active" href="index.php">Home</a>
				     	 </li>

				    	<li class="nav-item dropdown">
					        <a class="nav-link" href="men.php" id="navbarDropdown" role="button">Men</a>
					        <!-- 
					    	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="men.php">Men Clothes</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="men.php">Men Shoes</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="men.php">Men Jacket</a>
					        </div>
					    	-->
					    </li>

					    <li class="nav-item dropdown">
					        <a class="nav-link" href="women.php" id="navbarDropdown" role="button">Women</a>
					        <!--
					    	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="women.php">Women Clothes</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="women.php">Women Shoes</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="women.php">Women Dress</a>
					        </div>
					        -->
					    </li>
				     
				     	<li class="nav-item">
				        <a class="nav-link" href="#">Contact</a>
				        </li>

				      	<li class="nav-item">
				        <a class="nav-link" href="#">About</a>
				      	</li>

				    </ul>
				  
				</div>

			</nav>


		<!-- End Main Navbar -->
		</div>
	</div>
</div>
<!-- End Header -->