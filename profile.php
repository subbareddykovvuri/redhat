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
      <li ><a href="home.php">Home</a></li>
      <li class="active"><a href="#">Profile</a></li>
      <li><a href="update.php">Update</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
</div>

    
<div class="row">    
  <div class="col-md-4"></div>
  <div class="col-md-4"> 
    <div style="margin-top:100px;border-radius: 10px;background-color: rgba(0,0,0,.2);box-shadow:  0 0 10px rgba(255,255,255,.3);padding: 30px;">
      <img src="profile.png" style="width:30%;display: block;margin-left: auto;margin-right: auto;">
      <center><h4>Name: <?php echo $row1['Name']?></h4>
      <h4>Roll Number:<?php echo $row1['Roll_number']?></h4>
      <h4>Email:<?php echo $row1['Email']?></h4>
      <h4>College:<?php echo $row1['College']?></h4>
      <h4>Branch:<?php echo $row1['Branch']?></h4>
      <h4>Gender:<?php echo $row1['Gender']?></h4>
    </center>
    <div class="row">
      <div class="col-md-3">
    <a href="update.php"><button class="btn btn-success">
      Update 
    </button></a></div>
    <div class="col-md-6">
      
    </div>
    <div class="col-md-3">
    <a href="delete.php" ><button class="btn btn-danger">
      Delete
    </button></a></div>
  </div>

    </div>
  </div>
  <div class="col-md-4"></div>
</div>

</body>
</html>