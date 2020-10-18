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


$s = "select * from usertable where user = ?;";
$stmt1=mysqli_stmt_init($con);


if(!mysqli_stmt_prepare($stmt1,$s))
    {
        echo '<script>alert("Error !")</script>';
        include('sanchit.html');
    
    }

else{

mysqli_stmt_bind_param($stmt1,"s",$name);
mysqli_stmt_execute($stmt1);
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1)
{
    echo '<script>alert("Username already taken ! Try again.")</script>';
    include('sanchit.html');
    
}

else
{
    $sql = "insert into usertable(user,password,address,mob,email) values (?,?,?,?,?)";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        echo '<script>alert("Error !")</script>';
        include('sanchit.html');
    }
    
    else
    {
        mysqli_stmt_bind_param($stmt,"sssis",$name,$pass,$addr,$mob,$email);
        mysqli_stmt_execute($stmt);
        echo '<script>alert("Registration successful !")</script>';
        include('sanchit.html');
    }
    
    
}
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