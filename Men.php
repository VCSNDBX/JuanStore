<?php
require('dbconnect.php');
include('CheckSession.php');
?>

<!doctype html>
<head> 
    <meta charset="UTF-8"></meta>
    <script type ="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"></link>
    <link rel="stylesheet" href="css/styles.css"></link>
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
    <title>Men Products</title>
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
            <li><a href="dashboard.html">Home</a></li>
            <li><a href="AddProducts.php" id="addproducts">Add Products</a></li>
            <li ><a href="products.php">View All Products</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a href="Men.php">MEN</a></li>
                    <li><a href="Women.php">WOMEN</a></li>
                </ul>      
            </li>
            <li><a href="Logout.php">Log Out </a></li> 
        </ul>
    <!-- end of nav tabs-->    
    </div>
    <?php
    $sql="Select productName, price, image, productID FROM product WHERE gender='men'";
    $result=mysqli_query($conn,$sql) or die(mysql_error());
    while($row=mysqli_fetch_array($result))
    {
    ?>
    <form action="products.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <div class="col-md-3">  
            <div class="item_display text-center">  
                <img src="images/Men/<?php echo $row["image"]; ?>" class="item_img"/><br/>  
                <h4 class="text-info"><?php echo $row["productName"]; ?></h4>  
                <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                <span>
                <a class="btn btn-info" href="Edit.php?edit_id=<?php echo $row['productID']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                </span>
                <span>    
                <a class="btn btn-danger" href="DeleteProducts.php?delete_id=<?php echo $row['productID']; ?>" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
                </span>    
            </div>
        </div>
    <!-- end of container -->
        <?php
        }
        ?> 
    </form>    
</body>
<html> 