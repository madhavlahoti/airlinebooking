<?php

session_start();

    $con = mysqli_connect('localhost:8080','root','');
mysqli_select_db($con,'userregistration');

$passenger_id = $_POST['passenger_id'];
$name=$_SESSION['username'];

$s = "select * from passenger where Passenger_id = '$passenger_id' and User_Name='$name' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1)
{
    $reg = "delete from passenger where Passenger_id = '$passenger_id' and User_Name='$name' ";
    mysqli_query($con,$reg);
    echo '<script>alert("Booking has been cancelled")</script>';
    include('indexhi.html');
    
}





    
    else
    {
        echo '<script>alert("Incorrect passenger id")</script>';
            include('indexhi.html');
    }
    


?>
