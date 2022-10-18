<?php
require('dbconnect.php');
include('CheckSession.php');
    
if(isset($_POST['update']))
{
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $gender = $_POST['gender'];
    $image = $_FILES['images']['name'];
    
    $sql = "UPDATE product SET productName='$productname', price='$price', gender='$gender',
    image='$image' WHERE productName='$productname'";
   
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
} 
    else {
        echo "Error updating record: " . mysqli_error($conn);
}
}

if(isset($_POST['update']))
{
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $gender = $_POST['gender'];
    $image = $_FILES['images']['name'];
    
    $sql = "UPDATE product SET productName='$productname', price='$price', gender='$gender',
    image='$image' WHERE productName='$productname'";
   
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
} 
    else {
        echo "Error updating record: " . mysqli_error($conn);
}
}

?>