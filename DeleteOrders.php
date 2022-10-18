<?php
require('dbconnect.php');
include('CheckSession.php');

$id = $_GET['ord_id'];
	if(isset($_GET['ord_id']) && !empty($_GET['ord_id']))
	{
		
		$sql = "DELETE FROM orders WHERE productID ='$id'";
        $result=mysqli_query($conn,$sql) or die(mysql_error());
        header("Location: DisplayOrders.php");
    }
?>