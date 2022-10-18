<?php
require('dbconnect.php');
include('CheckSession.php');
$id = $_GET['edit_id'];

if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
{
    
    $sql = "SELECT  productName, price,image,gender FROM product WHERE productID ='$id'";
    $result=mysqli_query($conn,$sql) or die(mysql_error());
        while($row=mysqli_fetch_array($result))
{
    $productname = $row['productName'];
    $price = $row['price'];
    $gender = $row['gender'];
    $image = $row['image'];

}
}
else
{
    header("Location: Edit.php");
}

if(isset($_POST['update']))
{
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $gender = $_POST['gender'];
    $image = $_FILES['images']['name'];
    
    $sql = "UPDATE product SET productName='$productname', price='$price', gender='$gender',
    image='$image' WHERE productID='$id'";
  
    if (mysqli_query($conn, $sql)) {
     header("Location: products.php");
} 
    else {
        echo "Error updating record: " . mysqli_error($conn);
}
}
?>

<!doctype html>
<html>  
<head>  
    <meta charset="UTF-8"></meta>
    <script type ="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"></link>
    <link rel="stylesheet" href="css/styles.css"></link>
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
    <title>Edit Product</title>
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
        <h1>EDIT PRODUCT</h1>
	    <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <table class="table table-bordered table-responsive text-center">
                <tr>
                    <td><label class="control-label">Product Name</label></td>
                    <td><input class="form-control" type="text" name="productname" value="
                        <?php echo $productname ?>" required> </td>
                </tr>    
                <tr>
                    <td><label class="control-label">Price</label></td>
                    <td><input class="form-control" type="number" name="price" placeholder="
                        <?php echo $price ?>" required /></td>
                </tr>
                <tr>
                    <td><label class="control-label">Image</label></td>
                    <td><img src="images/all/<?php echo $image ?>" height="150" width="150" />
                        <input class="input-group" type="file" name='images' value="
                        <?php echo $image ?>" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="update" class="btn btn-default">
                    <span class="glyphicon glyphicon-save"></span> &nbsp; Update
                    </button>
                    <a class="btn btn-default" href="products.php"> <span class="glyphicon glyphicon-backward"></span> cancel </a>  
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
<html> 