<?php
$conn = mysqli_connect("localhost", "root", "")or die (mysqli_error());
$dbconn = mysqli_select_db($conn , "cart") or die (mysqli_error());
?>