<?php
include('admin_dash/include/dbconnect.php');

$email = $_POST['email'];
$password = $_POST['password'];


$sql = $conn-> prepare("SELECT * FROM costumer WHERE email= ? AND password= ?");
$sql -> bindParam (1, $email);
$sql -> bindParam (2, $password);
$sql -> execute();
$row = $sql-> fetch(PDO::FETCH_ASSOC);
$rowcount = $sql-> rowCount();
    if ($rowcount == 1){
        header("Location: index2.html");
    }
else{
    echo "WRONG EMAIL OR PASSWORD";
    //header("Location: index.html");
}
?>