<?php

session_start();

$con = mysqli_connect('localhost:8080','root','');
    
mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$addr = $_POST['address'];
$mob = $_POST['mob'];
$email = $_POST['email'];
$_SESSION['username']=$name;


$s = "select * from usertable where user = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1)
{
    echo '<script>alert("Username already taken ! Try again.")</script>';
    include('sanchit.html');
    
}

else
{
    $reg = "insert into usertable(user,password,address,mob,email) values ('$name','$pass','$addr','$mob','$email')";
    
    mysqli_query($con,$reg);
    
    echo '<script>alert("Registration successful !")</script>';
    include('sanchit.html');
}


?>

<html>
<body>
    <style>
        p{
            color: black;
        }
    
    </style>
    
</body>




</html>