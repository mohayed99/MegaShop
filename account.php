<?php 
ob_start();
session_start();
include "includes/navbar.php";
$pagetitle="Account";

if(!isset($_SESSION["user"]))
{
	header("location:index.php");
}
?>




<div class="account-wrapper">
	
	<h1 class="account-title">My Account</h1>
	<div class="divider"></div>
	<div class="account">
		
		<div class="row">
			
			<a href="?page=myprofile">
				<div class="account-item">
					<div class="account-icon">	
					<i class="fas fa-user"></i>
					</div>
					<span>Edit Profile<span>
				</div>
			</a>

				<a href="?page=myorder">
					<div class="account-item">
						<div class="account-icon">
							<i class="fas fa-shopping-cart"></i>
						</div>
						<span>My Order<span>
					</div>
				</a>

				<a href="?page=wishlist">
				<div class="account-item">
					<div class="account-icon">
						<i class="fas fa-heart"></i>
					</div>
					<span>My Wishlist<span>
				</div>
				</a>

		</div>

	</div>

	<a href="logout.php" class="btn btn-primary">Logout</a>

</div>



<?php 
include "includes/footer.php";
?>