<?php  

$host = "localhost";
$user = "root";
$pass = "";

$db_name = "emp_db";

$conn  = mysqli_connect($host, $user, $pass, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
