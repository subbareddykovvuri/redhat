<?php
if(isset($_POST['submit'])){
$roll=$_POST['rollno'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$gender=$_POST['gender'];
$college=$_POST['clg'];
$branch=$_POST['branch'];
if(!empty($roll) || !empty($roll) || !empty($roll) || !empty($roll) || !empty($roll) || !empty($roll) || !empty($roll)){
	$con=mysqli_connect("localhost","root","","student_registration");
	$insert="INSERT Into student SET Roll_number='".$roll."',Name='".$uname."',Email='".$email."',Password='".$password."',Gender='".$gender."',College='".$college."',Branch='".$branch."'";
	$res=mysqli_query($con,$insert);
      if($res){
          echo "<script>alert('Successfully Registered,please login');location.href='login.html'</script>";
      }
      else{
          echo "<script>alert('Already have an account,Please login');location.href='login.html'</script>";
      }
  }
}


?>