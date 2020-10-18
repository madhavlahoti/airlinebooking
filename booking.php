<?php

//session_start();

$con = mysqli_connect('localhost:8080','root','');
    
mysqli_select_db($con,'userregistration');

if(!$con)
{
    echo "ERROR In connection to server ";
}
else
{
    echo "Connected";
}

$name = $_POST['user'];
$pass = $_POST['password'];
$addr = $_POST['address'];
$mob = $_POST['mob'];
$email = $_POST['email'];

echo 'Names '.$name;


$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "Username already taken ";
}
else
{
    $reg = "insert into usertable(user,password,address,mob,email) values ('$name','$pass','$addr','$mob','$email')";
    
    mysqli_query($con,$reg);
    echo"Registration Successful !";
    
    include('sanchit.html');
}


?>