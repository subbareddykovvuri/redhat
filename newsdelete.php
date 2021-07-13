<?php
session_start();
$roll1=$_SESSION['roll'];
$con=mysqli_connect("localhost","root","","student_registration");
if (@$_GET['delete_id']!=""){
  
  $did=$_GET['delete_id'];
  $sql="DELETE FROM news Where ID='$did' and Rollno='$roll1'";
  $result=mysqli_query($con,$sql);
  if($result){
    echo"<script>alert('record deleted');location.href='profile.php'</script>";
  }
}
?>