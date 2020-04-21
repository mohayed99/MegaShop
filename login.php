<?php 
ob_start();
session_start();
$pagetitle = "Login";

include "includes/navbar.php";

?>

<div class="form-wrap">

<div class="bread-crumb"><a href="index.php">Home</a> | Login</div>

<p>Login To Your Account</p>
<div class="divider"></div>


<form class="horizontal-form" action="" method="POST">
	
	<h1 class="form-title">Login</h1>

	<?php 

if( $_SERVER["REQUEST_METHOD"] === "POST" )
{
	include "includes/connect.php";
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$hashedpass = sha1($password);
	$query = $conn->prepare("SELECT * FROM users where user_name = ? AND user_password = ?");
	$query->execute(array($username,$hashedpass));
	if( $query->rowCount() > 0 )
	{
		$_SESSION["user"] = $username;
		header("location:index.php");
	}

	else
	{
		echo "<div class='alert alert-danger'>Wrong Username / Password</div>";
	}
}
	?>
	<div class="form-group">
		<input type="text" name="username" class="form-control" placeholder="Username">
	</div>

	<div class="form-group">
		<input type="password" name="password" class="form-control" placeholder="Password">
	</div>

	<div class="form-group">
		<a href="#">Forgot Password?</a>
	</div>

	<div class="form-group">
		<input type="submit" value="Login" class="btn form-btn btn-block">
	</div>

</form>

</div>





<?php 
include "includes/footer.php";
?>