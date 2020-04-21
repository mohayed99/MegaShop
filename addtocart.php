<?php 
session_start();
include "includes/connect.php";

$productid = $_GET["id"];
$username  = $_GET["user"];
$query = $conn->prepare("INSERT INTO cart VALUES ('',$productid,'$username')");
$query->execute();

$query1 = $conn->prepare("SELECT * FROM cart where Username = ?");
$query1->execute(array($_SESSION["user"]));
$count = $query1->rowCount();
echo $count;
?>