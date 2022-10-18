<?php
require('dbconnect.php');
?>

<!doctype html>
<html>  
<head>  
    <script src="js/jquery-2.1.4.min.js"> </script>  
    <link rel="stylesheet" href="css/bootstrap.min.css"/> 
    <link rel="stylesheet" href="css/styles.css"/>  
    <script src='js/bootstrap.min.js'></script>  
    <title>View Products</title>  
</head>  
<body>
    <div class="container">
        <div class="jumbotron"> 
            <div class="row">
                <div class="col-md-4">
                    <img src="images/logo.jpg">
                </div>
                <div class="col-md-8 text-center">
                    <h1 class="lead"> Juan Store </h1>
                    <h3><i>Quick, free, easy online stores</i></h3>
                </div>
            </div>
            <!-- end of row-->
        </div>
        <!-- end ofjumbotron-->
    </div>
    <!-- end of container-->
    <div class="container">
        <ul class="nav nav-tabs navbar-right">
            <li><a href="index.html">Home</a></li>
            <li><a href="AboutUs.html">About Us</a></li>
            <li><a href="ContactUs.html">Contact Us</a></li>
            <li class="active"><a href="Gallery.php">Gallery</a></li>
            <li><a href="AdminUser.html">Log In</a></li>
            <li><a href="Register.html">Register</a></li>            
        </ul> 
    </div>
    <?php
    $sql="Select * FROM product";
    $result=mysqli_query($conn,$sql) or die(mysql_error());
    while($row=mysqli_fetch_array($result))
    {
    ?>
        <div class="col-md-3">  
        <div class="item_display text-center">  
            <img src="images/all/<?php echo $row["image"]; ?>" class="item_img"/><br/>  
            <h4 class="text-info"><?php echo $row["productName"]; ?></h4>  
            <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
        </div>
        </div>
        <!-- end of container -->
    <?php
    }
    ?>      
</body>
<html>    


