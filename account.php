<?php 
ob_start();
session_start();
include "includes/navbar.php";
include "includes/connect.php";
$pagetitle="Account";

if(!isset($_SESSION["user"]))
{
	header("location:index.php");
}

if(isset($_GET["page"]))
{
if( $_GET["page"] === "myprofile" )
{

// Treatement For My Profile Page
$query = $conn->prepare("SELECT * from users where user_name = ?");
$query->execute(array($_SESSION["user"]));
while($result = $query->fetch())
{
?>

<div class="edit-profile">
	
<h1 class="edit-title">Edit Profile</h1>

<div class="divider"></div>


<form class="edit-form">
	
	<div class="form-group">
		<input type="text" name="username" value="<?php echo $result["user_name"]; ?>" class="form-control">
	</div>

	<div class="form-group">
		<input type="email" name="email" value="<?php echo $result["user_email"]; ?>" class="form-control">
	</div>

	<div class="form-group">
		<input type="text" name="fullname" value="<?php echo $result["user_fullname"] ?>" class="form-control">
	</div>

	<div class="form-group" id="togglepass">
		<input type="password" name="password" value="<?php echo $result["user_password"] ?>" class="form-control">
		<button id="toggle-pass-btn">Show</button>
	</div>

	<div class="form-group">
		<input type="submit" value="Save" class="btn btn-primary btn-block">
	</div>

</form>

</div>

<?php
}
}
// Treatement For My Profile Page


else if( $_GET["page"] === "myorder" )
{

// Treatement For My Order Page
?>


<div class="my-order">

	<div class="my-order-items">
		<p class="no-order-items">Sorry, you didn't have any order yet.</p>
	</div>	

</div>


	<?php
}

else if( $_GET["page"] === "wishlist" )
{

// Treatement For Wish List Page

?>	

<div class="wish-list">

	<div class="wish-list-items">
		<p class="no-wish-items">Sorry, you didn't have any wish yet.</p>
	</div>	

</div>


<?php

}

else
{

// If No Get Request Given

?>


<div class="pagenot-found">
	
	<p>Sorry the page you looking for is not found.</p>

</div>


<?php
}

}
else
{

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
}

?>








<!--

-->


<?php 
include "includes/footer.php";
?>