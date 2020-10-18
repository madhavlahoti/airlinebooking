<?php

session_start();
$con = mysqli_connect('localhost:8080','root','');
    
mysqli_select_db($con,'userregistration');



$tit = $_POST['title'];
$date = $_POST['date_of_flight'];
$sou = $_POST['source_'];
$dest = $_POST['destination'];
$desc = $_POST['description'];
$name = $_SESSION['username'];




$reg = "insert into flight_enquiry (User_Name,date_of_flight,source_,destination,title,description) values ('$name','$date','$sou','$dest','$tit','$desc')";
    
    mysqli_query($con,$reg);

    echo '<script>alert("Enquiry Submitted! We will respond you shortly through your mail .")</script>';
    include('indexhi.html');
    
    



?>