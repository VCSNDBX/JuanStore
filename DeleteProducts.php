<?php
require('dbconnect.php');
include('CheckSession.php');

$id = $_GET['delete_id'];
	if(isset($_GET['delete_id']) && !empty($_GET['delete_id']))
	{
		$sql = "DELETE FROM product WHERE productID ='$id'";
        $result=mysqli_query($conn,$sql) or die(mysql_error());
        header("Location: Display.php");
    }
?>