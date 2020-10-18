<?php

session_start();

$con = mysqli_connect('localhost:8080','root','');
    
mysqli_select_db($con,'userregistration');

$num=$_POST['no_pass'];
$fli=$_POST['source'];
$_SESSION['src']=$fli;

if($num==1)
{
    include("page1.php");    
}

if($num==2)
{
    include("page2.php");    
}

if($num==3)
{
    include("page3.php");    
}

if($num>3)
{
    echo '<script>alert("Passenger should be less than 4.")</script>';
    include('abc.php');
    
    
}

?>