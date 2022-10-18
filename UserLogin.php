<?php
include("dbconnect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($conn,$_POST['txtuser']);
   $mypassword = mysqli_real_escape_string($conn,$_POST['txtpass']); 
   
   $sql = "SELECT * FROM customer WHERE username = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $active = $row['active'];
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
     
   if($count == 1) {
      $_SESSION['user'] = $myusername;
      header("location: Userpage.html");
   }else {
      header("location: UserLogin.php");
   }
}
?>

<!doctype html> 
<html>
<head> 
    <script type ="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"></link>
    <link rel="stylesheet" href="css/login.css"></link>
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
    <title>Login</title>
</head>
<body> 
    <div class="container text-center">
        <form action="UserLogin.php" class="frame"  method="POST"> 
            <img src="images/logo.jpg" class="img-responsive" />
            <h2> Sign-in </h2> 
            <input type ="text" placeholder="Username" class="form-control" name="txtuser" required/> 
            <input type ="password" placeholder="Password"  class="form-control" name="txtpass" required/> 
            <input type ="submit" value="Login"  class="btn btn-primary btn-block"/>
            <a class="btn btn-primary btn-block" href="AdminUser.html">Back</a>
            </form>
    </div>
</body>
</html>