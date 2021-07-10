<?php
session_start();
$roll1=$_SESSION['roll'];
$con=mysqli_connect("localhost","root","","student_registration");
$row="SELECT * FROM student WHERE Roll_number='".$roll1."'";
$re=mysqli_query($con,$row);
$row1=mysqli_fetch_array($re);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div>
<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-top: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Student Info</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li ><a href="profile.php">Profile</a></li>
      <li><a href="update.php">Update</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
</div>

    <div > 
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="carousel-content">
              <img src="home1.jpg"  style="width:100%;" alt="...">
              
              <h2  style="text-align: center;font-weight: bold;margin-top: 30px;">Welcome  <?php echo $row1['Name']?> </h2>
              <h3 style="text-align: center;">Hello <?php echo $row1['Name']?>, Welcome to student info portal. Here you can view your details and update them.</h3>
              
            </div>
            
          </div>

          <div class="item">
            <div class="carousel-content">
              <img src="home2.jpg"  style="width:100%;">
            </div>
          </div>
        
          <div class="item">
            <div class="carousel-content">
            <img src="home3.jpg"  style="width:100%;">
          </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
       
    </div>
    <div>
      <h2  style="text-align: center;font-weight: bold;margin-top: 30px;">Welcome  <?php echo $row1['Name']?> </h2>
      <h3 style="text-align: center;">Hello <?php echo $row1['Name']?>, Welcome to student info portal. Here you can view your details and update them.</h3>
    </div>

<div style="margin-top:100px;">
<div>Name: <?php echo $row1['Name']?></div>
<div>Roll Number:<?php echo $row1['Roll_number']?></div>
<div>Email:<?php echo $row1['Email']?></div>
<div>College:<?php echo $row1['College']?></div>
<div>Branch:<?php echo $row1['Branch']?></div>
<div>Gender:<?php echo $row1['Gender']?></div></div>
</body>
</html>