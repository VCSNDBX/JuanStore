<?php
require('dbconnect.php');
include('CheckSession.php');
$username = $_SESSION['user'];
$price = $_POST['price'];
$productID = $_POST['productID'];
$qty = $_POST['quantity'];
$total = $qty * $price;

$sql="INSERT INTO orders(productID,price,quantity, username, timeframe) VALUES ('$productID', '$total','$qty','$username',now())";

    $result= mysqli_query($conn,$sql) or die (mysqli_error($conn));
    header("Location: DisplayOrders.php");
?>