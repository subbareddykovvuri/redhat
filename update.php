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

	<meta charset="utf-8">
	<title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="navbar.css">

</head>
<body  style="background-image: url('back2.jpg');background-size: cover;">
      <?php
            
            if(isset($_POST['update'])){

            $uname=$_POST['uname'];
            $email=$_POST['email'];
            $gender=$_POST['gender'];
            $college=$_POST['clg'];
            $branch=$_POST['branch'];
            if(!empty($uname) || !empty($email) || !empty($roll) || !empty($gender) || !empty($college) || !empty($branch) ){
               $con=mysqli_connect("localhost","root","","student_registration");
               $insert="UPDATE student SET Name='".$uname."',Email='".$email."',Gender='".$gender."',College='".$college."',Branch='".$branch."' WHERE Roll_number='".$roll1."'";
               $res=mysqli_query($con,$insert);
                  if($res){
                      echo "<script>alert('Successfully Updated');location.href='update.php'</script>";
                  }
                  else{
                      echo "<script>alert('Not Updated,Please retry it');location.href='profile.php'</script>";
                  }
              }
            }else{



            ?>

   <div class="container">
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
      <li><a  class="active" href="#">Update</a></li>
      <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
      <div class="row" style="margin-top: 100px;">
         <div class="col-md-4">
            
         </div>
         <div class="col-md-4" style="border-radius: 10px;background-color: rgba(0,0,0,.2);box-shadow:  0 0 10px rgba(255,255,255,.3);padding-bottom: 30px;">
            <h3 style="margin-top:50px;text-align: center;font-weight: bold;">UPDATE</h3>
         <div style="margin-top:10px;font-weight:bold;font-size: 15px;">Roll Number:<?php echo $row1['Roll_number']?>

         </div>
         <div >

         	<form class="form-group" method = "post" action="update.php">         
                <label style="margin-top: 15px;font-size: 15px;">Name:</label> 
               <input style="border-radius:5px;padding: 5px;width: 100%;" name = "uname" type = "text" id = "name" value="<?php echo $row1['Name']?>" required="">
               
     <br>
                <label style="margin-top: 15px;font-size: 15px;">Email:</label> 
               <input style="border-radius:5px;padding: 5px;width: 100%;" name = "email" type = "email" id = "name" value="<?php echo $row1['Email']?>" required="">
               
                   <br>
                <label style="margin-top: 15px;font-size: 15px;">College:</label> 
               <select style="border-radius:5px;padding: 5px;width: 100%;" name = "clg"   >
                  <option   hidden><?php echo $row1['College']?></option>
                  <option>AEC</option>
                  <option>ACET</option>
                  <option>ACOE</option>
                  </select>

               
                   <br>
                <label style="margin-top: 15px;font-size: 15px;">Branch:</label> 
               <select style="border-radius:5px;padding: 5px;width: 100%;" name = "branch"  >
                  <option   hidden><?php echo $row1['Branch']?></option>
                  <option>CSE</option>
                  <option>ECE</option>
                  <option>MECH</option>
                  <option>EEE</option>
                  <option>IT</option>
                  <option>CIVIL</option>
                  </select>
               
                    <br>
                <label style="margin-top: 15px;font-size: 15px;">Gender:</label> 
               <select style="border-radius:5px;padding: 5px;width: 100%;" name = "gender" type = "text" id = "name" >
                  <option   hidden><?php echo $row1['Gender']?></option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Prefer not to say</option>
               </select>
               <br>
               <button style="margin-top: 15px;float: left;" class="btn btn-success" name = "update" type = "submit" id = "update" value = "Update">Update</button>
            </form>
            <a href="profile.php"><button class="btn btn-danger" style="float:right;">Cancel</button></a>
         </div>
         </div>
      </div>
</div>
<?php
         }
      ?>
</body>
</html>