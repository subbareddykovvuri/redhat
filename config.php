<?php$host=getenv("MARIADB_SERVICE_HOST");
$user=getenv("db-user");
$pass=getenv("db-password");

$con=mysqli_connect($host,$user,$pass,"student_registration");
?>
