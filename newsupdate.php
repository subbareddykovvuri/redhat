<?php
session_start();
$roll1=$_SESSION['roll'];
$update_id=$_GET['update_id'];

$con=mysqli_connect("localhost","root","","student_registration");
$nrow="SELECT * FROM news WHERE ID='".$update_id."'";
$re=mysqli_query($con,$nrow);
$nrow1=mysqli_fetch_array($re);
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
      <li ><a href="news.php">News</a></li>
      <li ><a href="profile.php">Profile</a></li>
      <li><a href="update.php">Update</a></li>
      <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  <?php
            
            if(isset($_POST['post'])){
            
            $subject=$_POST['Subject'];
            $description=$_POST['Description'];
            
            if(!empty($subject) || !empty($description) ){
               $update="UPDATE news SET Heading='".$subject."',Description='".$description."' WHERE ID='".$update_id."' and Rollno='".$roll1."'";
               $res=mysqli_query($con,$update);
               
                  if($res){
                      echo "<script>alert('Successfully Updated');location.href=''</script>";
                  }
                  else{
                      echo "<script>alert('Not Updated,Please retry it');location.href=''</script>";
                  }
              }
            }
            else{



            ?>




    <div class="container">
      <div class="row" style="margin-top: 150px;">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="border: 1px solid blue;border-radius: 10px;background-color: rgba(0,0,0,.3);box-shadow:  0 0 10px rgba(255,255,255,.3);padding-bottom: 20px;">
          <form action="newsupdate.php?update_id=<?php echo $update_id ?>" method="POST" class="form-group" >
            <h3 style="text-align: center;margin-top: 10px;font-weight: bold;">Edit </h3>
            <label style="margin-top: 10px;">Subject:</label>
            <input type="text" class="form-control" id="rollno" name="Subject" required="" value="<?php echo $nrow1['Heading']?>">
            <label style="margin-top: 10px;">Description:</label>
            <textarea type="text" class="form-control" id="name" name="Description" required="" style="height: 250px;"><?php echo $nrow1['Description']?></textarea>
            <button type="submit" class="btn btn-success" name="post" style="margin-top: 15px;float: left;">Update</button>
            

          </form>
        <a href="profile.php"><button class="btn btn-danger" style="float:right;">Cancel</button></a>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
<?php
         }
         ?>
          
</body>
</html>