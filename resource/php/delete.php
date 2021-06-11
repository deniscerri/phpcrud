<?php  include $_SERVER['DOCUMENT_ROOT'] . "/phpcrud/dbconn.php";
$id = $_GET['id'];
$sql = "DELETE FROM employees WHERE id=$id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: ../../index.php?success=SucessfullyDeletedEmployee");
}else {
    header("Location: ../../index.php?error=ErrorDeletingEmployee");
}
