<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('Location:UserLogin.html');
    die();
} 
?>