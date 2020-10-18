<?php 


session_start();

$con = mysqli_connect('localhost:8080','root','');
    
mysqli_select_db($con,'userregistration');


$name=$_SESSION['username'];




$s = "select * from passenger NATURAL JOIN flight_schedule where User_Name = '$name'";

$result = mysqli_query($con, $s);


$num = mysqli_num_rows($result);


if ($num > 0) {
  echo '<table border="2" cellspacing="2" cellpadding="2"><tr><th>Flight_no</th><th>Passenger_id</th><th>Passenger_name</th><th>Date</th><th>Flight Name</th><th>Source</th><th>Destination</th><th>Arrival</th><th>Departure</th><th>Duration</th></tr>';
  while($row = $result->fetch_assoc()) {
     echo "<form action='abc.php' method='post'><tr><td class='fn'>".$row["flight_no"]."</td><td>".$row["Passenger_id"]."</td><td>".$row["name"]."</td><td>".$row["current_date_time"]."</td><td>".$row["flight_name"]."</td><td>".$row["source"]."</td><td>".$row["destination"]."</td><td>".$row["arrival"]."</td><td>".$row["departure"]."</td><td>".$row["duration"]."</td></tr></form>";
  }
    
} else {
  
}




?>
    
    
<html>
<head>
	<title> Fights </title>
	<link rel="Stylesheet" href="Style.css">
	<style> 

body
{
  background-color: #dadde6;
  font-family: arial;
    background-image: linear-gradient(rgba(0, 0, 0, 0.79),rgba(0,0,0,0.79)),url(back1.jpg);
	background-position: center;
	background-size: cover;
	position:static;
	overflow: hidden;
}        

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align:center;
  padding: 8px;
    color:white;
    border-color: transparent;
    border-bottom: 2px solid rgba(219, 219, 219, 0.69);
    border-right: 2px solid transparent;
    border-left: 2px solid transparent;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    margin-right: 50px;
  color: white;
    border-bottom: 3px solid #e67e22;
    border-top: 2px solid transparent;
    letter-spacing: 1px;
    font-size: 20px;
    font-weight: 200;
    line-height: 40px;
}

.btn
{
    display: inline-block;
    padding: 10px 30px;
    font-weight: 400;
    text-decoration: none; 
    border-radius: 200px;
    transition: backgound-colour 0.2s, border 0.2s, color 0.2s;
    background-color: #e67e22;
    border-radius: 200px;
    color: #fff;
    border: 1px solid #e67e22;
    
    
    
}
        
        p{
            
            margin: 20px 20px;
            color: #fff;
    font-size: 30px;
    word-spacing: 3px;
    letter-spacing: 1px;
            text-align: center;
        }        
        
        .py{
            
            text-decoration: none;
            
        }
}
	</style>
</head>

<body>
<li class="py"><a href="password.php">Cancel Booking</a></li>
<p class="para">BOOKINGS</p>    
</body>    
</html>