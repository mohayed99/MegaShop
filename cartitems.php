<?php 


include "includes/connect.php";

$query = $conn->prepare("SELECT * from cart where Username = ?");
$query->execute(array($_SESSION["user"]));
$count = $query->rowCount();
echo $count;
?>
