<?php

session_start();

$con = mysqli_connect('localhost:8080','root','');
    
mysqli_select_db($con,'userregistration');



$name = $_POST['user'];
$pass = $_POST['password'];
$_SESSION['username']=$name;



$s = "select * from usertable where user = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1)
{
    echo '<script>alert("Login Successful !")</script>';
    include('indexhi.html');
     
}
else
{
    
    echo '<script>alert("Login Unsuccessful !")</script>';
    include('sanchit.html');
    
}


?>