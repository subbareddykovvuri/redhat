<?php
$host=getenv("MARIADB_SERVICE_HOST");
$user=getenv("db-user");
$pass=getenv("db-password");

echo "<script>alert('hi');</script>";
$con=mysqli_connect($host,$user,$pass,"student_registration");
?>
