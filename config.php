<?php
$host=getenv("MARIADB_SERVICE_HOST");
$user=getenv("db-user");
$pass=getenv("db-password");
$db =   getenv("databasename");


$con=mysqli_connect($host,$user,$pass,$db);
?>
