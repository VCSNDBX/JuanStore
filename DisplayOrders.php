<?php
require('dbconnect.php');
include('CheckSession.php');
$username = $_SESSION['user'];

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
    <title>JuanStore</title>
</head>
<body> 
<form action="UserPage.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
            <li><a href="UserWomen.php">WOMEN</a></li>
        </ul>
        <li  class="active"><a href="DisplayOrders.php">View Orders</a></li>      
        </li>
        <li><a href="Logout.php">Log Out </a></li>
    </ul>
    <!-- end of nav tabs-->    
</div>
    <?php
    $sql="Select * FROM orders WHERE username='$username'";
    $result=mysqli_query($conn,$sql) or die(mysql_error());
    while($row=mysqli_fetch_array($result))
    {
    ?>
        <div class="container">
            <table class="table table-bordered table-hover">  
                <tr>  
                    <th width="10%">ProductID</th>  
                    <th width="10%">Quantity</th>  
                    <th width="10%">Total Price</th> 
                    <th width="10%"> Timeframe </th>
                    <th width="10%"> Remove Order?</th>
                </tr>    
                <tr>
                    <td > <?php echo $row["productID"]; ?> </td>
                    <td>  <?php echo $row["quantity"]; ?> </td>
                    <td>  $ <?php echo $row["price"]; ?></td> 
                    <td>   <?php echo $row["timeframe"]; ?></td>
                    <td> <a class="btn btn-danger" href="DeleteOrders.php?ord_id=<?php echo $row['productID']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a></td>    
                </tr>
            </table>
        </div>        
            <!-- end of container -->
    <?php
    }
    ?>
    </form>    
</body>
<html>    


