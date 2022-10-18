<?php
require('dbconnect.php');
include('CheckSession.php');
?>

<!doctype html>
<html>  
<head> 
    <meta charset="UTF-8"></meta>
    <link rel="stylesheet" href="js/jquery.bxslider.css">
    <script type ="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"></link>
    <link rel="stylesheet" href="css/styles.css"></link>
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
    <title>JuanStore - Men</title>
</head>
<body>
<div class ="container">
    <div class="jumbotron"> 
        <div class="row">
            <div class="col-md-4">
                <img src="images/logo.jpg">
            </div>
        <div class="col-md-8">
            <h1 class="lead text-center">Juan Store</h1>
            <h3 class="text-center"><i>Affordable and easy online stores</i></h3>
        </div>
        <!-- end of row-->
        </div>
        <!-- end ofjumbotron-->
    </div>
    <!-- end of container-->
</div>
<div class="container">    
    <ul class="nav nav-tabs navbar-right">
        <li><a href="Userpage.html">Home</a></li>
        <li><a href="Shop.php">SHOP</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="UserMen.php">MEN</a></li>
            <li class="active"><a href="UserWomen.php">WOMEN</a></li>
        </ul>
        <li><a href="DisplayOrders.php">View Orders</a></li>      
        </li>
        <li><a href="Logout.php">Log Out </a></li>
    </ul>
    <!-- end of nav tabs-->    
</div>
    <?php
        $sql="Select productName, price, image, productID FROM product WHERE gender='women'";
        $result=mysqli_query($conn,$sql) or die(mysql_error());
        while($row=mysqli_fetch_array($result))
        {        
    ?>
        <div class="col-md-3">  
            <div class="item_display text-center">  
                <img src="images/all/<?php echo $row["image"]; ?>" class="item_img"/><br/>  
                <h4 class="text-info"><?php echo $row["productName"]; ?></h4>  
                <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                <span>
                <a class="btn btn-success" href="Cart.php?order_id=<?php echo $row['productID'];?>" onclick="return confirm('Add this item to cart?')"><span class="glyphicon glyphicon-edit"></span> Add to Cart</a> 
                </span>
            </div>
        </div>
        <!-- end of container -->
    <?php
    }
    ?>
</body>
<html>    


