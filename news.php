<?php

$con=mysqli_connect("localhost","root","","student_registration");
$row="SELECT * FROM news order by Time DESC";
$re=mysqli_query($con,$row);
 
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
  <link rel="stylesheet" href="navbar.css">

</head>
<body style="background-image:url('index.jpg') ;">
<nav  class="navbar-fixed-top">
      <input  type="checkbox" id="check">
      <label style="width: 0px;" for="check" class="checkbtn">
        <i   class="glyphicon glyphicon-th-list"></i>
      </label>
       <label  class="logo"><a href="#" style="text-decoration: none;color: #d8b566"> Student Info</a></label>
      <ul>
        <li><a  href="home.php">HOME</a></li>
      <li ><a class="active" href="#">News</a></li>
      <li ><a href="profile.php">Profile</a></li>
      <li><a href="update.php">Update</a></li>
      <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
<div class="row" style="margin-top:100px;">
  <div class="col-md-3">
         
       </div>
       <div class="col-md-6">
         <?php  
        while($row1=mysqli_fetch_array($re))  { ?>
       
         
       
         <form style="margin-top:50px;border-radius: 10px;background-color: rgba(0,0,0,.15);box-shadow:  0 0 10px rgba(255,255,255,.3);padding: 30px;">
           <h3 style="margin-top:20px;"><?php echo $row1['Name']?></h3>
           <h4 style="margin-top:20px;font-weight: bold;"><?php echo $row1['Heading']?></h4>
           <p style="margin-top:10px;border-radius: 10px;background-color: rgba(0,0,0,.1);box-shadow:  0 0 10px rgba(255,255,255,.3);padding: 10px;">
             <?php echo $row1['Description']?>
           </p>
           <h5 style="text-align: right;"><?php echo $row1['Time']?></h5>
         </form> 
             
  <?php }



  ?>
</div>
       <div class="col-md-3">
         
       </div> 

</div>
    
    
</body>
</html>