<?php
require('dbconnect.php');
include('CheckSession.php');

$id = $_SESSION['user'];
	
		
		$sql = "SELECT  address, contactNo,username FROM customer WHERE username ='$id'";
        $result=mysqli_query($conn,$sql) or die(mysql_error());
          while($row=mysqli_fetch_array($result))
    {
        $address = $row['address'];
        $contact = $row['contactNo'];
        $username = $row['username'];
        
          }
   


if(isset($_POST['update']))
{
    $username = $_POST['username'];
    $address = $_POST['address'];
    $contact = $_POST['contactNo'];
    
    $sql = "UPDATE customer SET username='$username', address='$address', contactNo='$contact' WHERE username='$id'";
  
   
    if (mysqli_query($conn, $sql)) {
     header("Location: CustomerInfo.php");
} 
    else {
        echo "Error updating record: " . mysqli_error($conn);
}
}


?>

<!doctype html>
<html>  
      <head>  
           <title>Your Information</title>  
           <script src="jquery-2.1.4.min.js"> </script>  
           <link rel="stylesheet" href="css/bootstrap.min.css"/>  
           <script src='js/bootstrap.min.js'> </script>  
      </head>  
      <body>
           <div class="container">
        <h1> Update Your Information </h1>
	    <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
	<table class="table table-bordered table-responsive">
	
        
    <tr>
    	<td><label class="control-label">Username</label></td>
        <td><input class="form-control" type="text" name="username" value="
            <?php echo $username; ?>"> </td>
    </tr>
        
    <tr>
    	<td><label class="control-label">Address</label></td>
        <td><input class="form-control" type="text" name="address" value="
            <?php echo $address; ?>"> </td>
    </tr>
        
    <tr>
    	<td><label class="control-label">Contact Number</label></td>
        <td><input class="form-control" type="text" name="contactNo" value="
            <?php echo $contact; ?>"> </td>
    </tr>
    
        
    
    <tr>
        <td colspan="2"><button type="submit" name="update" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; Update
        </button>
        <a class="btn btn-default" href="Userpage.html"> <span class="glyphicon glyphicon-backward"></span> cancel </a>  
        
        
            
           
        </td>
    </tr>
    
    </table>
    
        </form>
            </div>  
          
      </body>
<html>