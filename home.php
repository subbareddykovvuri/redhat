<?php
session_start();
$roll1=$_SESSION['roll'];
include "config.php";
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
  <script src="//cdn.ckeditor.com/4.16.1/basic/ckeditor.js">
    
  </script>
   <link rel="stylesheet" href="navbar.css">
</head>
<body style="background-image:url('index.jpg') ;">
  <?php
            
            if(isset($_POST['post'])){
            $prollno=$row1['Roll_number'];
            $pname=$row1['Name'];
            $subject=$_POST['Subject'];
            $description=$_POST['Description'];
            
            if(!empty($prollno) || !empty($pname) || !empty($subject) || !empty($description)  ){
               
                $insert="insert into news (ID,Rollno,Name,Heading,Description,Time) values(UUID(),'$prollno','$pname','$subject','$description',CURRENT_TIMESTAMP)" ;              
                $res=mysqli_query($con,$insert);
              if($res){
                echo "<script>alert('Successfully Posted');location.href='home.php'</script>";
                 }
                  else{
                      echo "<script>alert('Failed try again');location.href='home.php'</script>";
                  }
              }
                         
           
            }else{



            ?>

<nav  class="navbar-fixed-top">
      <input  type="checkbox" id="check">
      <label style="width: 0px;" for="check" class="checkbtn">
        <i   class="glyphicon glyphicon-th-list"></i>
      </label>
       <label  class="logo"><a href="#" style="text-decoration: none;color: #d8b566"> Student Info</a></label>
      <ul>
        <li><a class="active" href="#">HOME</a></li>
      <li ><a href="news.php">News</a></li>
      <li ><a href="profile.php">Profile</a></li>
      <li><a href="update.php">Update</a></li>
      <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>


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

    

    <div class="container">
  <div class="row" style="margin-top: 50px;margin-bottom: 30px;">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="border-radius: 10px;background-color: rgba(0,0,50,.3);box-shadow:  0 0 10px rgba(255,255,255,.3);">
    <form action="home.php" method="POST" class="form-group" >
      <h3 style="text-align: center;margin-top: 20px;font-weight: bold;">New </h3><br>
    <label style="margin-top: 10px;">Subject:</label>
    <input type="text" class="form-control" id="rollno" name="Subject" required=""><br>
    <label style="margin-top: 10px;">Description:</label>
    <textarea type="text" class="form-control" id="name" name="Description" required=""  cols="50" rows="10"></textarea><br>
  
    
  <button type="submit" class="btn btn-success" name="post" style="margin-top: 10px;width: 100%">Post</button>
  </form>
  </div>
  <div class="col-md-3">
    
  </div>
  <script>
    CKEDITOR.replace('Description');
  </script>
  </div>
  
</div>
<?php
         }
      ?>
<!--<div style="margin-top:100px;">
<div>Name: <?php echo $row1['Name']?></div>
<div>Roll Number:<?php echo $row1['Roll_number']?></div>
<div>Email:<?php echo $row1['Email']?></div>
<div>College:<?php echo $row1['College']?></div>
<div>Branch:<?php echo $row1['Branch']?></div>
<div>Gender:<?php echo $row1['Gender']?></div></div>-->
</body>
</html>