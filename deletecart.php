<?php 
session_start();
include "includes/connect.php";

$id = $_GET["id"];

$query = $conn->prepare("DELETE FROM cart where ProductID= ?");
$query->execute(array($id));

$query1 = $conn->prepare("SELECT * FROM cart where Username = ?");
$query1->execute(array($_SESSION["user"]));
$count = $query1->rowCount();
echo $count;

?>