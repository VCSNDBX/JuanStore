<?php
require('dbconnect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
        
    $sql="INSERT INTO customer (address,contactNo,password,username) VALUES ('$address','$contact', '$password','$username')";
    $result= mysqli_query($conn,$sql) or die (mysqli_error($conn));
    header("Location: UserLogin.php");    
?>