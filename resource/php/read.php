<?php  include $_SERVER['DOCUMENT_ROOT'] . "/phpcrud/dbconn.php";

$sql = "SELECT * FROM employees ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
