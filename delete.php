<?php
session_start();
$roll1=$_SESSION['roll'];
include "config.php";
$row="DELETE FROM student WHERE Roll_number='".$roll1."'";
$re=mysqli_query($con,$row);
echo "<script>alert('Account deleted successfully,');location.href='signup.html'</script>";

?>