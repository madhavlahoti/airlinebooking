<?php

session_start();



$con = mysqli_connect('localhost:8080','root','');
    
mysqli_select_db($con,'userregistration');

$fli=$_SESSION['src'];

$nam = $_POST['name'];
$typ = $_POST['type'];
$gen = $_POST['gender'];
$nam2 = $_POST['name2'];
$typ2 = $_POST['type2'];
$gen2 = $_POST['gender2'];
$name=$_SESSION['username'];





$reg = "insert into passenger (User_Name,flight_no,name,type,gender) values ('$name','$fli','$nam','$typ','$gen')";
$reg1 = "insert into passenger (User_Name,flight_no,name,type,gender) values ('$name','$fli','$nam2','$typ2','$gen2')";
    
    mysqli_query($con,$reg);
    mysqli_query($con,$reg1);
    
$s = "select * from flight_schedule where flight_no='$fli' ";
$result=mysqli_query($con,$s);
$a=mysqli_fetch_array($result);


$fli_nam=$a[2];
$arr=$a[5];
$dep=$a[6];
$sou=$a[3];
$des=$a[4];
$date=$a[1];
$month = date('M', strtotime($date));
$day = date('d', strtotime($date));

?>

<html>

<body>
<section class="container">
<h1>Booked Tickets</h1>

    
    <div class="row">
    
    <article class="card fl-left">
      <section class="date">
        <time datetime="23th feb">
          <span><?php echo"".$day ?></span><span><?php echo"".$month ?></span>
        </time>
      </section>
      <section class="card-cont">
        <small>Flight No. <?php echo"".$fli ?></small>
        <h3><?php echo"".$nam ?> ( <?php echo"".$typ[0] ?>  <?php echo"".$gen[0] ?> )</h3>
        <div class="even-date">
         <i class="fa fa-calendar"></i>
         <time>
            <span>Arrival : <?php echo"".$arr ?></span>
            <span>Departure : <?php echo"".$dep ?></span>
         </time>
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
            <p>Flight : <?php echo"".$fli_nam ?> <br> Journey : <?php echo"".$sou ?> to <?php echo"".$des ?></p>
        </div>
        <a href=indexhi.html>PAY NOW</a>
      </section>
    </article>
  </div>
    
    <div class="row">
    
    <article class="card fl-left">
      <section class="date">
        <time datetime="23th feb">
          <span><?php echo"".$day ?></span><span><?php echo"".$month ?></span>
        </time>
      </section>
      <section class="card-cont">
        <small>Flight No. <?php echo"".$fli ?></small>
        <h3><?php echo"".$nam2 ?> ( <?php echo"".$typ2[0] ?>  <?php echo"".$gen2[0] ?> )</h3>
        <div class="even-date">
         <i class="fa fa-calendar"></i>
         <time>
            <span>Arrival : <?php echo"".$arr ?></span>
            <span>Departure : <?php echo"".$dep ?></span>
         </time>
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
            <p>Flight : <?php echo"".$fli_nam ?> <br> Journey : <?php echo"".$sou ?> to <?php echo"".$des ?></p>
        </div>
        <a href=indexhi.html>PAY NOW</a>
      </section>
    </article>
  </div>
    
    
    
  
</section>    

    <style>
    @import url('https://fonts.googleapis.com/css?family=Oswald');
*
{
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box
}

body
{
  background-color: #dadde6;
  font-family: arial;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(back.jpg);
	background-position: center;
	background-size: cover;
	position:static;
	overflow: hidden;
}



.container
{
  width: 90%;
  margin: 100px auto
}

h1
{
  color: rgb(255, 255, 255);
    text-transform: uppercase;
  font-weight: 900;
  border-left: 10px solid #fec500;
  padding-left: 10px;
  margin-bottom: 30px
}

.row{overflow: hidden}

.card
{
  display:block;
  width: 49%;
  background-color: rgba(255, 255, 255, 0.8);
  color: #918d8d;
  margin-bottom: 10px;
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase;
  border-radius: 4px;
  position: relative;

}



.date
{
  display: table-cell;
  width: 25%;
  position: relative;
  text-align: center;
  border-right: 3px dashed #ffffff;
}

.date:before,
.date:after
{
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  background-color: rgba(255, 255, 255, 0);
  position: absolute;
  top: -15px ;
  right: -15px;
  z-index: 1;
  border-radius: 50%
}

.date:after
{
  top: auto;
  bottom: -15px
}

.date time
{
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%)
}

.date time span{display: block}

.date time span:first-child
{
  color: #2b2b2b;
  font-weight: 600;
  font-size: 250%
}

.date time span:last-child
{
  text-transform: uppercase;
  font-weight: 600;
  margin-top: -10px
}

.card-cont
{
  display: table-cell;
  width: 75%;
  font-size: 85%;
  padding: 10px 10px 30px 50px
}

.card-cont h3
{
  color: #3C3C3C;
  font-size: 130%
}



.card-cont > div
{
  display: table-row
}

.card-cont .even-date i,
.card-cont .even-info i,
.card-cont .even-date time,
.card-cont .even-info p
{
  display: table-cell
}

.card-cont .even-date i,
.card-cont .even-info i
{
  padding: 5% 5% 0 0
}

.card-cont .even-info p
{
  padding: 30px 50px 0 0
}

.card-cont .even-date time span
{
  display: block
}

.card-cont a
{
  display: block;
  text-decoration: none;
  width: 80px;
  height: 30px;
  background-color: #D8DDE0;
  color: #fff;
  text-align: center;
  line-height: 30px;
  border-radius: 2px;
  position: absolute;
  right: 10px;
  bottom: 10px
}

.row .card .card-cont a
{
  background-color: #037FDD
}


@media screen and (max-width: 860px)
{
  .card
  {
    display: block;
    float: none;
    width: 100%;
    margin-bottom: 10px
  }
  
  .card + .card{margin-left: 0}
  
  .card-cont .even-date,
  .card-cont .even-info
  {
    font-size: 75%
  }
}
    </style>

    
    
</body>






</html>