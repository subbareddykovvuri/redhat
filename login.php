<?php
session_start();
if (isset($_POST['login'])) {
	$roll_no=$_POST['roll'];
	$password=$_POST['pwd'];
	if(!empty($roll_no) || !empty($password)){
		include "config.php";
		$select="SELECT * FROM student WHERE Roll_number='$roll_no' AND Password='$password'";
		$res=mysqli_query($con,$select);
		$row=mysqli_num_rows($res);
		if($row==1){
			echo "<script>location.href='home.php'</script>";
			$_SESSION['roll']=$roll_no;
		}
		else{
			echo "<script>alert('Please enter valid details');location.href='login.html'</script>";
		}

	}
}
?>