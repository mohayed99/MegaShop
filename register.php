<?php 
session_start();

$pagetitle = "Register";
if( $_SERVER["REQUEST_METHOD"] === "POST" )

{

	$username   = $_POST["username"];
	$email      = $_POST["email"];
	$fullname   = $_POST["fullname"];
	$password   = $_POST["password"];
	$hashedpass = sha1($password);

	$query = $conn->prepare("INSERT INTO users values ('','$username','$email','$fullname','$hashedpass')");
	$query->execute();

}


include "includes/navbar.php";
include "includes/connect.php";


?>


<div class="form-wrap">

<div class="bread-crumb"><a href="index.php">Home</a> | Register</div>

<p>Create An Account</p>
<div class="divider"></div>


<form class="horizontal-form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
	
	<h1 class="form-title">Register</h1>

	<div class="form-group">
		<input type="text" name="username" class="form-control" placeholder="Username">
	</div>

	<div class="form-group">
		<input type="email" name="email" class="form-control" placeholder="Email">
	</div>

	<div class="form-group">
		<input type="text" name="fullname" class="form-control" placeholder="Full Name">
	</div>

	<div class="form-group">
		<input type="password" name="password" class="form-control" placeholder="Password">
	</div>

	<div class="form-group">
		<input type="submit" value="Register" class="btn form-btn btn-block">
	</div>

</form>

</div>





<?php 
include "includes/footer.php";
?>