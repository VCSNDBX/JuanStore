<?php
require('dbconnect.php');
require('CheckSession.php');
   
$productName = $_POST['productname'];
$price = $_POST['price'];
$gender = $_POST['gender'];
$image = $_FILES['images']['name'];
    
$sql="INSERT INTO product (productName,price,gender,image) VALUES ('$productName', '$price','$gender','$image')";
$result= mysqli_query($conn,$sql) or die (mysqli_error($conn));
header("Location:AddProducts.html");
?>