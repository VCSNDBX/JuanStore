<?php
    require('dbconnect.php');
    
    $productID = $_GET['edit_id'];
   

    
    $sql = "SELECT  productName, price,image,gender FROM product WHERE productID ='$productID'";
    $result=mysqli_query($conn,$sql) or die(mysql_error());
    
   
    while($row=mysqli_fetch_array($result))
    {
   
  
?>
<!doctype html>
<html>  
      <head>  
           <title>View Products</title>  
           <script src="jquery-2.1.4.min.js"> </script>  
           <link rel="stylesheet" href="css/bootstrap.min.css"/>  
           <script src='js/bootstrap.min.js'> </script>  
      </head>  
      <body>
           <div class="container">
        <h1> Update Products </h1>
	    <form action="UpdateProducts.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
	<table class="table table-bordered table-responsive">
	
        
    <tr>
    	<td><label class="control-label">Product Name</label></td>
        <td><input class="form-control" type="text" name="productname" value="
            <?php echo $row["productName"] ?>"> </td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Price</label></td>
        <td><input class="form-control" type="number" name="price" placeholder="
            <?php echo $row["price"] ?>" /></td>
    </tr>
        
    <tr>
    	<td><label class="control-label">Gender</label></td>
        <td><input class="form-control" type="text" name="gender" value="
            <?php echo $row["gender"]?>" /></td>
    </tr>    
    
    <tr>
    	<td><label class="control-label">Image</label></td>
        <td><img src="<?php echo $row["image"] ?>" height="150" width="150" />
            <input class="input-group" type="file" name='images' value="
            <?php echo $row["image"]?>"/></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="update" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; Update
        </button>
        <a class="btn btn-default" href="Display.php"> <span class="glyphicon glyphicon-backward"></span> cancel </a>  
        
        
            
           
        </td>
    </tr>
    
    </table>
    

<?php 
  
    }

 ?>
        </form>
            </div>  
          
      </body>
<html> 
    


