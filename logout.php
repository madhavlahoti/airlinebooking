<?php
session_start();

$con = mysqli_connect('localhost:8080','root','');
    
mysqli_select_db($con,'userregistration');
unset($_SESSION['name']);
unset($_SESSION['src']);
header("Location:index.html");
?>