<?php
require('dbconnect.php');
$id = $_GET['order_id'];
?>

<!doctype html>
<head> 
    <meta charset="UTF-8"></meta>
    <link rel="stylesheet" href="js/jquery.bxslider.css">
    <script type ="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"></link>
    <link rel="stylesheet" href="css/styles.css"></link>
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
    <title>JuanStore</title>
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
    </div>
    <?php
        $sql="Select * FROM product WHERE productID='$id'";
        $result=mysqli_query($conn,$sql) or die(mysql_error());    
        while($row=mysqli_fetch_array($result))       
        {
    ?>
    <form action="Orders.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <div class="container">
            <div class="col-md-3">  
                <div class="item_display text-center">  
                    <img src="images/all/<?php echo $row["image"]; ?>" class="item_img"/><br/>  
                    <h4 class="text-info"><?php echo $row["productName"]; ?></h4>  
                    <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                    <input type="hidden" name ="price" value="<?php echo $row['price']; ?>"/>
                    <input type="hidden" name="productID" value="<?php echo $row['productID']; ?>"/>
                    <input type="number" name="quantity" value="1"/><br><br>
                    <button type="submit" name="btnsave" class="btn btn-default">
                        <span class="glyphicon glyphicon-save"></span> &nbsp; Order Now
                    </button> 
                    <a class="btn btn-default" href="Shop.php"> <span class="glyphicon glyphicon-backward"></span> cancel </a>  
                </div>
            </div>
            <!-- end of container -->  
        </div>          
        <?php
            }
        ?>  
    </form>    
</body>
<html>    


